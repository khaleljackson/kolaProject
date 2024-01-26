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

// Route::get('/about','pagesController@about');

// Route::get('/','pagesController@index')->name('homepage');

// Route::get('/services','pagesController@services');

// Route::get('/contact','pagesController@contact');

// Route::post('/contact','pagesController@submit_contact')->name('send');

Route::get('/','mainController@index')->name('homepage');//->middleware('auth'); //Protected
Route::get('/{id}','mainController@show')->name('details');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');
