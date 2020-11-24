<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DefaultController;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', function() {
//    return "Accueil";
//});

//Route::get('/contact', function() {
//    return "Contact";
//});

// exemple : http://localhost:8000/
Route::get('/', [DefaultController::class, 'home'])->name('default.home');

// exemple : http://localhost:8000/politique
Route::get('/{alias}', [DefaultController::class, 'category'])->name('default.category');

// exemple : http://localhost:8000/politique/emmanuel-macron-donne-sa-demission-lol_12564.html
Route::get('/{category}/{alias}_{id}.html', [DefaultController::class, 'post'])->name('default.post');

// exemple : http://localhost:8000/page/contact
Route::get('/page/contact', [ContactController::class, 'contact'])->name('contact.contact');