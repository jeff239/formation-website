<?php

namespace App\Http\Repositories;

use App\Models\Categorie;

class CategorieRepository
{

    public function getRandomCategories(int $limit = 5){
        return Categorie::inRandomOrder()->get()->take($limit);
    }

}
