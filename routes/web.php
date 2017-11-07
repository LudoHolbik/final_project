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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test','testController@index');

Route::get('/create','testController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'UserController@user_info');

Route::post('/home', 'UserController@updateUser')->name('update');

Route::get('/places', 'Controller@places');

Route::get('/home/best_view', 'placesController@Best_Views_Select');
Route::get('/home/summer_hangouts', 'placesController@Summer_Hangouts_Select');
Route::get('/home/the_best_parks', 'placesController@The_Best_Parks_Select');

Route::get('/new_place', 'placesController@newPlace');
