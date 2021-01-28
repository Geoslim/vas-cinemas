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

Route::prefix('user')->group(function() {
    Route::get('/login', 'UserController@index')->name('login');
    Route::post('/login', 'UserController@login')->name('login');
    Route::post('/logout', 'UserController@logout')->name('logout');

    Route::get('/signup', 'UserController@create')->name('register.index');;
    Route::post('/signup/store', 'UserController@store')->name('register.store');

});
