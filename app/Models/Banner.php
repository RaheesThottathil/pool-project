<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banners';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'title',
        'image',
        'description',
        'link',
        'status',
    ];

    /**
     * Get the image URL.
     */
    public function getImageUrlAttribute()
    {
        return $this->image ? asset($this->image) : null;
    }

    protected $appends = ['image_url'];
}
