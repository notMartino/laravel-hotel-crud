<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MainController@indexView') -> name('indexLink');

