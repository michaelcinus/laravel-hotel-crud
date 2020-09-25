<?php

use Illuminate\Support\Facades\Route;

Route::get('/stanze/', 'StanzeController@index') -> name('stanze');
Route::get('/show/{id}', 'StanzeController@show') -> name('stanza-show');
Route::post('stanze/create', 'StanzeController@store' ) -> name('stanza-create');