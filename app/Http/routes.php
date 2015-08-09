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

Route::get('/', 'HomeController@index');

Route::get('profile', 'PagesController@profile');

Route::get('portafolio', 'PagesController@portafolio');

Route::get('services', 'PagesController@services');

Route::get('resume', 'PagesController@resume');

Route::get('skills', 'PagesController@skills');

Route::get('contact', 'PagesController@contact');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);