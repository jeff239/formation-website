<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Formation;
use App\Models\Publication;
use Illuminate\Http\Request;

class RouterController extends Controller
{

    public function accueil(){
        return view('web.Accueil');
    }

    public function contacts(){
        $breadcumbData = [
            'title' => 'Contactez-nous', 'path' => ['Accueil' => route('accueil'), 'Contacts' => route('contacts')]
        ];
        return view('web.Contacts', compact('breadcumbData'));
    }

    public function formations(){
        $breadcumbData = [
            'title' => 'Nos Formations', 'path' => ['Accueil' => route('accueil'), 'Formations' => route('formations')]
        ];
        $formations = Formation::all('title','image','slug');
        return view('web.Formations.Formations', compact('breadcumbData', 'formations'));
    }

    public function formationDetails(string $formation){
        $breadcumbData = [
            'title' => $formation,
            'path' => [
                'Accueil' => route('accueil'),
                'Formations' => route('formations'),
                $formation => route('formationDetails', ['formation' => $formation])
            ]
        ];
        $formation = Formation::where('slug', $formation)->first();
        $listFormations = Formation::
//        where('slug','!=',$formation)
//            ->
            inRandomOrder()->get()->take(4);
        return view('web.Formations.FormationDetails', compact('breadcumbData', 'formation', 'listFormations'));
    }

    public function publications(){
        $breadcumbData = [
            'title' => 'Publications', 'path' => ['Accueil' => route('accueil'), 'Publications' => route('publications')]
        ];
        $publications = Publication::all('author','title','image','created_at','category','slug');
        return view('web.Blog.Publications', compact('breadcumbData','publications'));
    }

    public function publicationDetails(string $article){
        $breadcumbData = [
            'title' => $article,
            'path' => [
                'Accueil' => route('accueil'),
                'Publications' => route('publications'),
                $article => route('publicationDetails', ['article' => $article])
            ]
        ];
        $categories = Categorie::inRandomOrder()->get()->take(5);
        $publication = Publication::where('slug',$article)->first();
        $latestPublications = Publication::where('slug','!=',$article)->inRandomOrder()->get()->take(4);
        return view('web.Blog.PublicationDetails', compact('breadcumbData','publication', 'categories', 'latestPublications'));
    }
}
