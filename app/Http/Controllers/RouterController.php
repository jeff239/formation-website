<?php

namespace App\Http\Controllers;

use App\Helpers\Helpers;
use App\Http\Repositories\QuestionRepository;
use App\Http\Services\BreadcrumbServices;
use App\Http\Services\CategorieServices;
use App\Http\Services\FormateursServices;
use App\Http\Services\FormationServices;
use App\Http\Services\PublicationsServices;
use App\Http\Services\QuestionServices;
use App\Models\Categorie;
use App\Models\Commentaire;
use App\Models\Formateur;
use App\Models\Formation;
use App\Models\Publication;
use App\Models\Question;
use Illuminate\Http\Request;

class RouterController extends Controller
{
    public PublicationsServices $publicationsServices;
    public FormateursServices $formateursServices;
    public CategorieServices $categoriesServices;
    public FormationServices $formationServices;
    public QuestionServices $questionServices;
    public BreadcrumbServices $breadcrumbServices;

    public function __construct()
    {
        $this->publicationsServices = new PublicationsServices();
        $this->formateursServices = new FormateursServices();
        $this->categoriesServices = new CategorieServices();
        $this->formationServices = new FormationServices();
        $this->questionServices = new QuestionServices();
        $this->breadcrumbServices = new BreadcrumbServices();
    }

    public function accueil(){
        $formateurs = $this->formateursServices->index();
        return view('web.Accueil', compact('formateurs'));
    }

    public function contacts(){
        $breadcumbData = $this->breadcrumbServices->generateBreadcrumbContacts();
        return view('web.Contacts', compact('breadcumbData'));
    }

    public function formations(){
        $breadcumbData = $this->breadcrumbServices->generateBreadcrumbFormations();
        $formations = $this->formationServices->index();
        return view('web.Formations.Formations', compact('breadcumbData', 'formations'));
    }

    public function formationDetails(string $formation){
        $breadcumbData =  $this->breadcrumbServices->generateBreadcrumbFormations($formation);
        $formationDetails = $this->formationServices->getFormationsDetails($formation);
        $banner = $formationDetails?->banner;
        $listFormations = $this->formationServices->getRandomFormationsExcept($formation);
        $questions = $this->questionServices->getQuestionsByFormation($formationDetails->title);
        return view('web.Formations.FormationDetails', compact('breadcumbData', 'formationDetails', 'listFormations','banner','questions'));
    }

    public function publications(){
        $breadcumbData = $this->breadcrumbServices->generateBreadcrumbPublications();
        $publications = $this->publicationsServices->index();
        return view('web.Blog.Publications', compact('breadcumbData','publications'));
    }

    public function publicationDetails(string $article) {
        $breadcumbData = $this->breadcrumbServices->generateBreadcrumbPublications($article);
        $categories = $this->categoriesServices->getRandomCategories();
        $publication = $this->publicationsServices->getPublicationBySlug($article);
        $banner = $publication->banner;
        $latestPublications = $this->publicationsServices->getRandomPublications($article);
        $commentaires = Commentaire::where('publication', $article)->orderBy('created_at')->simplePaginate(10);

        return view('web.Blog.PublicationDetails', compact('breadcumbData','publication', 'categories', 'latestPublications', 'banner', 'commentaires'));
    }

    public function publicationsCategories(string $categorie){
        $breadcumbData = $this->breadcrumbServices->generateBreadcrumbPublications();
        $publications = $this->publicationsServices->getPublicationsByCategory($categorie);
        return view('web.Blog.Publications', compact('breadcumbData','publications'));
    }

}
