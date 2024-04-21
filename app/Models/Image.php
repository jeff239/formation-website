<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $image
 */
class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'description'
    ];

//    protected $casts = [
//        'image' => 'array'
//    ];
}
