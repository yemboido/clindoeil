<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\PubliciteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\UserController;
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

Route::middleware(['auth'])->group(function () {
 
 Route::get('/admin',[AdminController::class,'index'])->name('admin');
 Route::resource('categories',CategorieController::class);
 Route::resource('articles',ArticleController::class);
 Route::get('sorted/{id}',[ArticleController::class, 'sortByCategorie'])->name('sorted');


 Route::resource('commentaire',CommentaireController::class);
 Route::post('commentaire/{reply_to}',[CommentaireController::class,'reply'])->name('reply_to');



 Route::resource('users',UserController::class);
  Route::post('desactiver',[UserController::class,'desactiver'])->name('desactiver');
 Route::get('profile/{id}',[UserController::class,'profile'])->name('profile');


 Route::resource('publicite',PubliciteController::class);

});

Route::get('/',[AccueilController::class,'index'])->name('index');
Route::get('lirePlus/{id}',[AccueilController::class,'lireArticle'])->name('lirePlus');

Auth::routes();

