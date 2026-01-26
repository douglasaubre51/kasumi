<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    protected $fillable = [
        'title',
        'caption',
        'details',
        'createdDate',
        'imageUrl',
    ];
}
