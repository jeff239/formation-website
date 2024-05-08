<?php

namespace App\Http\Services;

use App\Http\Repositories\CategorieRepository;

class CategorieServices
{
    public CategorieRepository $categorieRepository;

    public function __construct()
    {
        $this->categorieRepository = new CategorieRepository();
    }

    public function getRandomCategories(int $limit = 5)
    {
        return $this->categorieRepository->getRandomCategories($limit);
    }

}
