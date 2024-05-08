<?php

namespace App\Http\Services;

use App\Http\Repositories\FormateurRepository;
use Illuminate\Database\Eloquent\Collection;

class FormateursServices
{
    public FormateurRepository $formateurRepository;

    public function __construct()
    {
        $this->formateurRepository = new FormateurRepository();
    }

    public function index(): Collection
    {
        return $this->formateurRepository->index();
    }

}
