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

Route::get('/', function () {
    return view('indexMiomo');
});

Route::get('perfil','UsuariosController@index');
Route::post('editarperfil','UsuariosController@update');
//Route::get('/', 'QuinielaController@show');

Route::get('resultados', 'QuinielaController@resultados');
Route::get('proximos', 'QuinielaController@proximos');
Route::get('proximos/{name}', 'QuinielaController@proximosR');

Route::get('quiniela', 'QuinielaController@show');
Route::get('jornada/{id}', 'QuinielaController@jornada');
Route::get('fase/{name}', 'QuinielaController@fase');

Route::get('terminos','StaticController@terminos');
Route::get('privacidad','StaticController@privacidad');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('savedatainteres', 'RolesInteresController@store');

Route::get('football','FootballController@show');
Route::get('football/{id}','FootballController@getPartidos');

Route::get('admin','AdminController@show');
