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

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/', 'EmpleadosController@index')->middleware("auth");
Route::post('/store', 'EmpleadosController@store')->middleware("auth");
Route::get('/delete/{id}', 'EmpleadosController@delete')->middleware("auth");
Route::post('/edit/{id}', 'EmpleadosController@edit')->middleware("auth");
