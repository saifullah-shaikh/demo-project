<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('employee','EmployeeController');

Route::get('employee/create','CountryCityController@index');
Route::post('employee/create/get-states-by-country','CountryCityController@getState');
Route::post('employee/create/get-cities-by-state','CountryCityController@getCity');
