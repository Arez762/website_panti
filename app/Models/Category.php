<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'slug',
    ];

    /**
     * Automatically set the slug when name is set.
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;

        if (!isset($this->attributes['slug']) || $this->attributes['slug'] !== Str::slug($value)) {
            $this->attributes['slug'] = Str::slug($value);
        }
    }

    /**
     * Get the route key name for Laravel model binding.
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Relationship: A category has many published news items.
     */
    public function news()
    {
        return $this->hasMany(News::class)->where('status', 'publish');
    }

    /**
     * Accessor for icon attribute.
     */
    public function getIconAttribute($value)
    {
        return asset('storage/icons/' . $value);
    }
}
