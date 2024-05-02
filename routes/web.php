<?php

use App\Http\Controllers\CommentairesController;
use App\Http\Controllers\RouterController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/accueil');

Route::get('/accueil', [RouterController::class, 'accueil'])->name('accueil');
Route::get('/contacts', [RouterController::class, 'contacts'])->name('contacts');
Route::get('/formations', [RouterController::class, 'formations'])->name('formations');
Route::get('/formations/{formation}', [RouterController::class, 'formationDetails'])->name('formationDetails');
Route::get('/publications', [RouterController::class, 'publications'])->name('publications');
Route::get('/publications/categories/{categorie}', [RouterController::class, 'publicationsCategories'])->name('publicationsCategorie');
Route::get('/publication/{article}', [RouterController::class, 'publicationDetails'])->name('publicationDetails');
Route::post('/contact', [CommentairesController::class, 'postComment'])->name('postComment');

