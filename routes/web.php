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


Route::get('/places', 'PlacesController@index');


// URLs for indivdidual categories of places
//1)
Route::get('/places/1', 'PlacesController@Best_Views_Select');

Route::get('/places/2', 'PlacesController@Summer_Hangouts_Select');

Route::get('/places/3', 'PlacesController@The_Best_Parks_Select');

Route::get('/places/4', 'PlacesController@Cinemas');



Route::get('/places/5', 'PlacesController@Art_Galleries');

Route::get('/places/6', 'PlacesController@Cultural_Centres');





//URL for the whole map
Route::get('/places/map', 'PlacesController@map');
Route::post('/places/map/filter', 'PlacesController@mapFilter');


