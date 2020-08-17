<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/series', 'SeriesController@index')->name('listar_series');
Route::get('/series/create', 'SeriesController@create')->name('form_create_series');
Route::post('/series/create', "SeriesController@store");
Route::delete('/series/remove/{id}', 'SeriesController@destroy');
