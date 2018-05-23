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
    // Route::get('quiniela', 'QuinielaController@show');
    // Route::get('resultados', 'QuinielaController@resultados');
    // Route::get('proximos', 'QuinielaController@proximos');
    // Route::get('proximos/{name}', 'QuinielaController@proximosR');
    // Route::get('jornada/{id}', 'QuinielaController@jornada');
    // Route::get('fase/{name}', 'QuinielaController@fase');

    Route::get('quiniela','AdminController@show');
    Route::get('jornada/{id}','AdminController@jornada');
    Route::get('resultados','AdminController@resultados');
    Route::get('proximos','AdminController@proximos');
});



Route::get('perfil','UsuariosController@index');
Route::post('editarperfil','UsuariosController@update');

Route::get('/register/verify/{code}', 'GuestController@verify');

//Route::get('/', 'QuinielaController@show');



Route::get('terminos','StaticController@terminos');
Route::get('privacidad','StaticController@privacidad');

Auth::routes();

Route::get('paises','CommonController@paises');
Route::get('estados','CommonController@estados');
Route::post('estados/{code}','CommonController@estadospost');


Route::get('/home', 'HomeController@index')->name('home');

Route::post('savedatainteres', 'RolesInteresController@store');

// Route::get('football','FootballController@show');
// Route::get('football/{id}','FootballController@getPartidos');
