<?php

namespace App\Http\Repositories;

use App\Models\Formateur;
use App\Models\Formation;
use Illuminate\Database\Eloquent\Collection;

class FormateurRepository
{
    public function index(): Collection {
        return Formateur::all();
    }
}
