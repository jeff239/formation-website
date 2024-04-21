<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Publication extends Model
{
    use HasFactory;

    protected $fillable = [
        'author',
        'title',
        'category',
        'image',
        'content',
        'slug'
    ];

    public function categorie(): BelongsTo{
        return $this->belongsTo(Categorie::class, 'category', 'name');
    }

    public function auteur(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author', 'name');
    }
}
