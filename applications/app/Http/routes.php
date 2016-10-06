<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomePageController@index')->name('index');
Route::get('/career', 'WelcomePageController@career')->name('career');

Route::post('/subscribe', 'WelcomePageController@subscribePost')->name('subscribe.Post');
Route::get('email', 'WelcomePageController@email');
