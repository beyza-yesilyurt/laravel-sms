<?php

use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',"App\Http\Controllers\StudentController@index");
Route::get('/edit/{id}',"App\Http\Controllers\StudentController@edit");
Route::get('/show/{id}',"App\Http\Controllers\StudentController@show");
Route::get('/create',"App\Http\Controllers\StudentController@create");
Route::post('/store',"App\Http\Controllers\StudentController@store");
Route::post('/update/{id}',"App\Http\Controllers\StudentController@update");