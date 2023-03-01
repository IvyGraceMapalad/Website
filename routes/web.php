<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/about', 'App\Http\Controllers\HomeController@about');
Route::get('/contact', 'App\Http\Controllers\HomeController@contact');
Route::get('/menu', 'App\Http\Controllers\HomeController@menu');
// Route::get('/', function(){
//     return view('index');
// });