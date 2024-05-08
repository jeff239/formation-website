<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $title
 * @property string $image
 * @property string $content
 * @property string $slug
 * @property string $banner
 */
class Formation extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'content',
        'slug',
        'banner'
    ];
}
