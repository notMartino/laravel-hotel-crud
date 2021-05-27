<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MainController@indexView') -> name('indexLink');
Route::get('/employee/{id}', 'MainController@employeeView') -> name('employeeLink');

Route::get('/edit/employee/{id}', 'MainController@editEmployeeView') -> name('editEmployeeLink');
Route::post('/update/employee/{id}', 'MainController@updateEmployee') -> name('updateEmployeeLink');

Route::get('/delete/employee/{id}', 'MainController@deleteEmployee') -> name('deleteEmployeeLink');