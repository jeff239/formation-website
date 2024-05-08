<?php

namespace App\Http\Services;

use App\Http\Repositories\QuestionRepository;
use Illuminate\Database\Eloquent\Collection;

class QuestionServices
{
    public QuestionRepository $questionRepository;

    public function __construct()
    {
        $this->questionRepository = new QuestionRepository();
    }

    public function getQuestionsByFormation(string $formation): Collection {
        return $this->questionRepository->getQuestionsByFormation($formation);
    }

}
