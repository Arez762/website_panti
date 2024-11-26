<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Infographic extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'infographics';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'image',
        'status',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'status' => 'boolean',
    ];

    public static function boot()
    {
        parent::boot();

        // Hapus gambar saat model dihapus
        static::deleting(function ($infografis) {
            if ($infografis->image && Storage::disk('public')->exists($infografis->image)) {
                Storage::disk('public')->delete($infografis->image);
            }
        });
    }
}

