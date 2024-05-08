<?php

namespace App\Http\Repositories;

use App\Models\Question;
use Illuminate\Database\Eloquent\Collection;

class QuestionRepository
{

    public function getQuestionsByFormation(string $formation): Collection {
        return Question::where('formation', $formation)->get();
    }

}
