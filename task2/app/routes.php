<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showArtists');

Route::get('/artist/{id}', 'HomeController@showArtist');

Route::get('/album/{id}', 'HomeController@showAlbum');

Route::get('/track/{id}', 'HomeController@showTrack');