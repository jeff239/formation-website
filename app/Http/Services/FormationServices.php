<?php

namespace App\Http\Services;

use App\BaseInterface;
use App\Http\Repositories\FormationRepository;
use App\Models\Formation;
use Illuminate\Database\Eloquent\Collection;

class FormationServices
{
    public FormationRepository $formationRepository;
    public function __construct()
    {
        $this->formationRepository = new FormationRepository();
    }

    public function index(): Collection {
        return $this->formationRepository->index();
    }

    public function getRandomFormationsExcept(string $formation, int $limit=4): Collection {
        return $this->formationRepository->getRandomFormationsExcept($formation, $limit);
    }

    public function getFormationsDetails(string $formation): ?Formation {
        return $this->formationRepository->getFormationsDetails($formation);
    }

}
