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

Route::get('/','PeliculaController@index')->name('home');
Route::get('peliculas','PeliculaController@index')->name('vistaPeliculas');
Route::get('funciones','FuncionController@index')->name('vistaFunciones');
Route::resource('/pelicula','PeliculaController');
Route::resource('/funcion','FuncionController');
