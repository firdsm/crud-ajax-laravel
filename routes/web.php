<?php

Route::get('/', 'EmployeeController@index');
Route::get('/employee', 'EmployeeController@showAll');
Route::post('/employee', 'EmployeeController@store');
Route::get('/employee/{employee}', 'EmployeeController@show');
Route::put('/employee/{employee}', 'EmployeeController@update');
Route::delete('/employee/{employee}', 'EmployeeController@destroy');


