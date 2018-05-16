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

Route::get('/', 'QuinielaController@index');

Route::get('resultados', 'QuinielaController@resultados');
Route::get('proximos', 'QuinielaController@proximos');
Route::get('proximos/{name}', 'QuinielaController@proximosR');

Route::get('quiniela', 'QuinielaController@show');
Route::get('jornada/{id}', 'QuinielaController@jornada');
Route::get('fase/{name}', 'QuinielaController@fase');

Route::get('terminos','StaticController@terminos');
Route::get('privacidad','StaticController@privacidad');
