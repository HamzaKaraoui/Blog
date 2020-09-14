<?php

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


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Movie Routres
route::get('/','MovieController@index')->name('movie.index');
route::get('/movies/{id}','MovieController@show')->name('movie.show');

//Actors Routres
Route::get('/actors', 'ActorsController@index')->name('actors.index');
Route::get('/actors/page/{page?}', 'ActorsController@index');
route::get('/actors/{id}','ActorsController@show')->name('actor.show');

// Tv Show Routes 

Route::get('/tvshow', 'TvShowController@index')->name('tv.index');
route::get('/tvshow/{id}','TvShowController@show')->name('tv.show');



