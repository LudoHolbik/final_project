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

Route::get('/home', 'UserController@user_info')->name('home');

Route::post('/home', 'UserController@updateUser')->name('update');

Route::get('/new_place' ,  'PlacesController@newPlace');
Route::post('/new_place', 'PlacesController@CreatePlace' );


Route::get('/places', 'PlacesController@index')->name('places');

Route::get('/places/map', 'PlacesController@map');

Route::post('/places/map/filter', 'PlacesController@mapFilter');
