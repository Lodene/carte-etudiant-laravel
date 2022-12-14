<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\EntrepriseControlleur;


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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/posts', [PostController::class, 'index']);

Route::get('/post/{post:id}', [PostController::class, 'post'])->name('post');

Route::get('/entreprise/ajout/{id}', [EntrepriseControlleur::class, 'scope'])->name('entreprise.scope');
Route::post('/entreprise/ajout', [EntrepriseControlleur::class, 'target'])->name('people.scope');

// Route::get('/entreprise/valider/{user:id}', [EntrepriseControlleur::class, 'valider'])->name('valider.utilisateur');

Route::get('/register', [RegisterController::class, 'create'])->middleware();
Route::post('/register', [RegisterController::class, 'store'])->middleware();

Route::get('/deconnexion', [SessionController::class, 'destroy'])->middleware('auth');

Route::get('/login', [SessionController::class, 'create'])->middleware();
Route::post('/login', [SessionController::class, 'login'])->middleware();

Route::get('/entrepriseLogin', [SessionController::class, 'createEntreprise'])->middleware();
Route::post('/entrepriseLogin', [SessionController::class, 'loginEntrperise'])->middleware();

Route::get('/compte', [SessionController::class, 'compte']);