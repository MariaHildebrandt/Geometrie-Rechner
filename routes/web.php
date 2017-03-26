<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/



Route::get('/', 'PagesController@getIndex');

Route::post('kreise/berechne', ['uses' => 'KreiseController@berechne', 'as' => 'kreise.berechne']);
Route::get('kreise/store', ['uses' => 'KreiseController@store', 'as' => 'kreise.store']);

Route::post('kugeln/berechne', ['uses' => 'KugelnController@berechne', 'as' => 'kugeln.berechne']);
Route::get('kugeln/store', ['uses' => 'KugelnController@store', 'as' => 'kugeln.store']);

Route::resource('kreise', 'KreiseController');
Route::resource('kugeln', 'KugelnController');
Route::resource('kegel', 'KegelController');
Route::resource('rechtecke', 'RechteckeController');
Route::resource('quader', 'QuaderController');
Route::resource('pyramiden', 'PyramidenController');



