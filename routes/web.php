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

Route::get('/', 'CommonController@index');
Route::get('/comprobar', function () {
    return view('emails.useralert');
});

//Colocar todas las rutas que se van a usar solo cuando el usuario haya confirmado su correo
Route::group(['middleware' => ['check_confirm']], function () {

    Route::get('quiniela','EventoController@show');
    Route::get('jornada/{id}','EventoController@jornada');
    Route::get('resultados','EventoController@resultados');
    Route::get('proximos','EventoController@proximos');

    Route::get('admin','AdminController@show');
    Route::get('admin/{id}','AdminController@jornada');

    Route::post('admin','AdminController@store');

    Route::post('quiniela','QuinielaController@store');
    Route::put('quiniela','QuinielaController@update');
    Route::get('quiniela/{id}/{jornada}','QuinielaController@quiniela');
    Route::get('misquinielas','QuinielaController@show');
});

Route::get('perfil','UsuariosController@index');
Route::post('editarperfil','UsuariosController@update');

Route::get('/register/verify/{code}', 'GuestController@verify');

Route::get('terminos','StaticController@terminos');
Route::get('privacidad','StaticController@privacidad');

Auth::routes();

Route::get('paises','CommonController@paises');
Route::get('estados','CommonController@estados');
Route::post('estados/{code}','CommonController@estadospost');

Route::get('/home', 'HomeController@index')->name('home');

Route::post('savedatainteres', 'RolesInteresController@store');
