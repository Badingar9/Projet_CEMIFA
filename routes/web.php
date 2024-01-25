<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\CabinetController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;



Route::get('#', function () {
    return view('welcome');
});
Route::get('/Gfinance', function () {
    return view('FORMATIONS.Gfinance');
})->name('gestion_financiere');

Route::get('/', [AccueilController::class, 'pagecentrale'])->name('accueil');
Route::get('/Cabinet', [CabinetController::class, 'pagecabinet'])->name('Cabinet');
Route::get('/Service', [ServiceController::class, 'pageservice'])->name('service');
Route::get('/Formation', [FormationController::class, 'pageformation'])->name('formation');
Route::get('/Faq', [FaqController::class, 'pagefaq'])->name('faq');
Route::get('/Contact', [ContactController::class, 'pagecontact'])->name('contact');
Route::get('/Actualite', [ActualiteController::class, 'pageactualite'])->name('actualite');
