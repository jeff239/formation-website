<?php

namespace App\Http\Repositories;

use App\Models\Formation;
use Illuminate\Database\Eloquent\Collection;

class FormationRepository
{
    public function index(): Collection {
        return Formation::all('title','image','slug');
    }

    public function getRandomFormationsExcept(string $formation, int $limit=4): Collection {
        return Formation::where('slug','!=',$formation)->inRandomOrder()->get()->take($limit);
    }

    public function getFormationsDetails(string $formation): ?Formation{
        return Formation::where('slug',$formation)->first();
    }

}
