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

Route::get('/', function () {
    return view('welcome');
});
Route::get("create","testing@create");
Route::post("store","testing@store");
Route::get("index","testing@index");
Route::get("show/{id}","testing@show");
Route::get("edit/{id}","testing@edit");
Route::patch("update/{id}","testing@update");
Route::get("delete/{id}","testing@destroy");