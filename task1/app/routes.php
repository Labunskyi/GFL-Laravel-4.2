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
Route::get('/', 'HomeController@showHello');
Route::get('/home', 'HomeController@showHome');
Route::get('/articles', 'ArticlesController@index');
Route::get('/article/{id}', 'ArticleController@index');
Route::get('/about', 'AboutController@index');
Route::get('/contact-us', array('as' => 'myForm', 'uses' => 'ContactController@index'));
Route::post('/contact-us', 'ContactController@postSubmit');
Route::get('/thank-you', 'ContactController@showThanks');


