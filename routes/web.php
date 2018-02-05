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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::middleware(['auth'])->prefix('api')->name('')->group(function() {
    Route::apiResource('persons', 'PersonController');
    Route::apiResource('persons.likes', 'PersonLikeController');
    Route::apiResource('persons.dislikes', 'PersonDislikeController');
});