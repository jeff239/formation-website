<?php

namespace App\Http\Repositories;

use App\Models\Publication;
use Illuminate\Database\Eloquent\Collection;

class PublicationRepository
{

    public function index(): Collection {
        return Publication::all('author','title','image','created_at','category','slug');
    }

    public function getPublicationBySlug(string $slug): ?Publication {
        return Publication::where('slug',$slug)->first();
    }

    public function getRandomPublications(string $slug, int $limit = 4): Collection {
        return Publication::where('slug','!=',$slug)->inRandomOrder()->get()->take($limit);
    }

    public function getPublicationsByCategory(string $categorie): Collection {
        return Publication::all('author','title','image','created_at','category','slug')->where('category',$categorie);
    }

}
