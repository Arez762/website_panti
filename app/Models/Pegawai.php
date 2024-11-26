<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Pegawai extends Model
{
    use HasFactory;

    // Field yang dapat diisi secara massal
    protected $fillable = ['image', 'nama', 'jabatan'];

    /**
     * Mutator untuk gambar.
     * Menghapus gambar lama saat gambar baru diunggah atau data dihapus.
     */
    public static function boot()
    {
        parent::boot();

        // Hapus gambar saat model dihapus
        static::deleting(function ($pegawai) {
            if ($pegawai->image && Storage::disk('public')->exists($pegawai->image)) {
                Storage::disk('public')->delete($pegawai->image);
            }
        });
    }

    /**
     * Accessor untuk gambar.
     * Mengembalikan URL gambar jika ada.
     */
    public function getImageUrlAttribute()
    {
        return $this->image ? Storage::url($this->image) : null;
    }
}
