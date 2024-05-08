<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property string $author
 * @property string $title
 * @property string $category
 * @property string $image
 * @property string $content
 * @property string $slug
 * @property string $banner
 */
class Publication extends Model
{
    use HasFactory;

    protected $fillable = [
        'author',
        'title',
        'category',
        'image',
        'content',
        'slug',
        'banner'
    ];

    public function categorie(): BelongsTo{
        return $this->belongsTo(Categorie::class, 'category', 'name');
    }

    public function auteur(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author', 'name');
    }

    public function commentaires(): HasMany{
        return $this->hasMany(Commentaire::class,'publication','title');
    }
}
