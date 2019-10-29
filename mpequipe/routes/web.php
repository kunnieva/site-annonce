<?php

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

// page d'accueil
Route::get('/', function () {
    return view('page-accueil');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// espace membre
// DANS LA CLASSE AnnonceController JE DOIS CREER LA MEHODE deposerAnnonce
Route::get('/deposer-annonce', 'AnnonceController@deposerAnnonce')->name('deposer-annonce');
