<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'StanzeController@index') -> name('stanze');
