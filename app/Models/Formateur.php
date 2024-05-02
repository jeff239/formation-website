<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formateur extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'titre',
        'image',
        'link_linkedin',
        'link_twitter',
        'link_facebook'
    ];
}
