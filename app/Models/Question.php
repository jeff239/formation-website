<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'formation', 'content'];

    public function formation() {
        return $this->belongsTo(Formation::class,'formation','title');
    }
}
