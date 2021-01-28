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

Route::prefix('cinema')->group(function() {
    
    Route::get('/', 'CinemaController@index')->name('cinema.index');
    Route::get('/create', 'CinemaController@create');
    Route::post('/store', 'CinemaController@store')->name('cinema.store');
    Route::get('/{slug}', 'CinemaController@show')->name('cinema.show');

});
