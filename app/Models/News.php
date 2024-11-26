<?php

namespace App\Models;

use Illuminate\Support\Str;
use Filament\Facades\Filament;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // Import SoftDeletes
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class News extends Model
{
    use SoftDeletes; // Mengaktifkan fitur soft deletes

    protected $fillable = [
        'name',
        'slug',
        'status',
        'thumbnail',
        'content',
        'category_id',
        'user_id',
        'upload_time',
        'gallery',
    ];

    // Cast agar kolom tertentu diperlakukan sebagai tanggal
    protected $dates = ['deleted_at', 'upload_time'];

    // Set otomatis slug saat nama diubah dan pastikan slug unik
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;

        // Buat slug dari name
        $baseSlug = Str::slug($value);
        $slug = $baseSlug;
        $counter = 1;

        // Cek apakah slug sudah ada di database
        while (self::where('slug', $slug)->exists()) {
            // Jika sudah ada, tambahkan angka di akhir slug
            $slug = $baseSlug . '-' . $counter;
            $counter++;
        }

        $this->attributes['slug'] = $slug;
    }

    // Relasi ke kategori
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    // Relasi ke user (author)
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Mengisi user_id dan status secara otomatis saat model dibuat
    protected static function booted()
    {
        static::creating(function ($news) {
            // Set user_id jika tidak diatur
            if (!$news->user_id) {
                $news->user_id = Filament::auth()->user()->id;
            }

            // Set default status ke 'draft' jika belum diatur
            if (!$news->status) {
                $news->status = 'draft';
            }
        });

        static::deleting(function ($news) {
            if ($news->isForceDeleting()) { // Hanya untuk penghapusan permanen
                if ($news->thumbnail && Storage::disk('public')->exists($news->thumbnail)) {
                    Storage::disk('public')->delete($news->thumbnail);
                }
            }

            if (is_array($news->gallery)) {
                foreach ($news->gallery as $image) {
                    if (is_string($image)) { // Pastikan setiap item adalah string
                        Storage::disk('public')->delete($image);
                    }
                }
            }
        });
    }


    protected $casts = [
        'gallery' => 'array', // Pastikan kolom gallery di-cast ke array
    ];
}
