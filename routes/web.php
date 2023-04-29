<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MembresController;
use App\Http\Controllers\ProjetsController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\CompetencesController;
use App\Http\Controllers\EntreprisesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
//Route::get('/', [ContactsControllers::class, 'index']);
Route::get('/', [ServicesController::class,'index']);
Route::post('service/store', [ServicesController::class, 'store'])->name('service.store');
Route::get('service/create', [ServicesController::class, 'create'])->name('service.create');

Route::post('/', [competenceController::class, 'mail'])->name('mailcontact');
Route::get('/', [CompetencesController::class,'index']);
Route::post('competence/store', [CompetencesController::class, 'store'])->name('competence.store');
Route::get('competence/create', [CompetencesController::class, 'create'])->name('competence.create');

//Route::get('/', [EntreprisesController::class,'index']);
Route::post('entreprise/store', [EntreprisesController::class, 'store'])->name('entreprise.store');
Route::get('entreprise/create', [EntreprisesController::class, 'create'])->name('entreprise.create');

//Route::get('/', [MembresController::class,'index']);
Route::get('membre/create', [MembresController::class, 'create'])->name('membre.create');
Route::post('membre/store', [MembresController::class, 'store'])->name('membre.store');

//Route::get('/', [ProjetsController::class,'index']);
Route::get('projet/create', [ProjetsController::class, 'create'])->name('projet.create');
Route::post('projet/store', [ProjetsController::class, 'store'])->name('projet.store');

//Route::get('/', [ContactsController::class,'index']);
Route::get('contact/create', [ContactsController::class, 'create'])->name('contact.create');
Route::post('contact/store', [ContactsController::class, 'store'])->name('contact.store');
Route::get('/mail', [ContactsController::class, 'mail'])->name('mail');
// Route::post('/')

Route::get('home', function () {
    return view('home');
})->middleware('auth');
