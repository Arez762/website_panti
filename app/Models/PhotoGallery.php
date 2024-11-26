<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PhotoGallery extends Model
{
    use HasFactory, SoftDeletes; // Tambahkan SoftDeletes untuk mendukung fitur soft delete

    protected $fillable = [
        'title',
        'description',
        'image_path',
        'user_id', // Pastikan 'user_id' ada di fillable
    ];

    // Tentukan kolom tanggal soft delete
    protected $dates = ['deleted_at'];

    /**
     * Relasi ke model User
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Mengambil URL lengkap dari image_path
     */


    /**
     * Boot method untuk mengisi user_id secara otomatis
     */
    protected static function boot()
    {
        parent::boot();

        // Mengisi user_id secara otomatis dengan ID pengguna yang login
        static::creating(function ($model) {
            if (Auth::check()) {
                $model->user_id = Auth::id();
            }
        });

        // Hapus file gambar saat model dihapus secara permanen
        static::deleting(function ($model) {
            if ($model->isForceDeleting()) { // Hanya untuk penghapusan permanen
                if ($model->image_path && Storage::disk('public')->exists($model->image_path)) {
                    Storage::disk('public')->delete($model->image_path);
                }
            }
        });
    }
    public function getImageUrlAttribute()
    {
        return $this->image_path ? Storage::url($this->image_path) : null;
    }
}
