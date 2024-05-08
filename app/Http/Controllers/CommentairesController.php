<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCommentRequest;
use App\Models\Commentaire;

class CommentairesController extends Controller
{
    public function postComment(CreateCommentRequest $request){

        Commentaire::create($request->all());
        $request->session()->flash('success', 'Votre message a bien été envoyé');
        return redirect()->back();
    }
}
