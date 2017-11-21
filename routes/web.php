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

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'UserController@user_info')->name('home');


Route::post('/home', 'UserController@updateUser')->name('update');

// URL for New Place page

Route::get('/new_place' ,  'PlacesController@newPlace');
Route::post('/new_place', 'PlacesController@CreatePlace' );

Route::get('/places', 'PlacesController@index')->name('places');


// URLs for indivdidual categories of places

/*
Route::get('/places/1', 'PlacesController@Best_Views_Select');

Route::get('/places/2', 'PlacesController@Summer_Hangouts_Select');

Route::get('/places/3', 'PlacesController@The_Best_Parks_Select');

Route::get('/places/4', 'PlacesController@Hotels_and_hostels');

Route::get('/places/5', 'PlacesController@Art_Galleries');

Route::get('/places/6', 'PlacesController@Cultural_Centres');

Route::get('/places/7', 'PlacesController@Cinemas');
*/

//URL for the whole map
Route::get('/places/map', 'PlacesController@map');
Route::post('/places/map/filter', 'PlacesController@mapFilter');
Route::get('/places/{id?}', 'PlacesController@index')->name('places');
Route::get('/like','likeController@like');
Route::get('/dislike','likeController@dislike');

Route::get('/places/detail/{id}', 'PlacesController@placeDetail');
//Route::get('/places/detail/{id}', 'PlacesController@mapPlace');
Route::post('/places/detail/{id}', 'PlacesController@createReview');
//Route::get('/places/detail/{id}' , 'PlacesController@getReview');


Route::get('/places/detail/{id}/delete', 'PlacesController@deleteReview');

