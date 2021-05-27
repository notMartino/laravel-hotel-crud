<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MainController@indexView') -> name('indexLink');
Route::get('/employee/{id}', 'MainController@employeeView') -> name('employeeLink');

Route::get('/delete/employee/{id}', 'MainController@deleteEmployee') -> name('deleteEmployeeLink');