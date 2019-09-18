<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/plant' , "HomeController@plant");
Route::get('/disease' , "HomeController@disease");
Route::get('/plantDisease' , "HomeController@plantDisease");
Route::get('/specificPlant/{id}' , "HomeController@getSpecificPlant");
Route::get('/specificDisease/{id}',"HomeController@getSpecificDisease");