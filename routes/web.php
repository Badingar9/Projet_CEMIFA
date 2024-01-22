<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\CabinetController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/Acceuil', [AccueilController::class, 'pagecentrale']);
Route::get('/Cabinet', [CabinetController::class, 'pagecabinet']);
Route::get('/Service', [ServiceController::class, 'pageservice']);
Route::get('/Formation', [FormationController::class, 'pageformation']);
Route::get('/Faq', [FaqController::class, 'pagefaq']);
Route::get('/Contact', [ContactController::class, 'pagecontact']);
Route::get('/Actualite', [ActualiteController::class], 'pageactualite');