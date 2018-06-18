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

Route::group(['middleware' => ['admin']], function () {

      Route::get('admin','AdminController@show');
      Route::get('admin/{id}','AdminController@jornada');

      Route::get('admin/activar/{id}','AdminController@activar');
      Route::get('admin/abrir/{id}','AdminController@abrir');

      Route::get('admin/progreso/{id}','AdminController@enProgreso');
      Route::get('admin/partido/{id}/{jornada}','AdminController@partido');

      //Route::get('admin/editarpartido','AdminController@partido');
      Route::get('/getallusers','AdminController@allUsers');
      Route::get('/userdelete/{id_usuario}','AdminController@deleteUser');

      Route::post('admin','AdminController@store');

      Route::get('/userdelete/{id_usuario}','AdminController@deleteUser');

      Route::get('profile/{id}','UsuariosController@show');
});

//Colocar todas las rutas que se van a usar solo cuando el usuario haya confirmado su correo
Route::group(['middleware' => ['check_confirm']], function () {

    Route::get('quiniela','EventoController@show');
    Route::get('jornada/{id}','EventoController@jornada');
    Route::get('resultados','EventoController@resultados');
    Route::get('proximos','EventoController@proximos');

    Route::post('quiniela','QuinielaController@store');
    Route::post('editarQuiniela','QuinielaController@update');
    Route::get('quiniela/{id}/{jornada}','QuinielaController@quiniela');
    Route::get('misquinielas','QuinielaController@show');

    Route::get('perfil','UsuariosController@index')->name('profile');;
    Route::post('editarperfil','UsuariosController@update');

    Route::get('/puntosjornada/{Jornada_id}','RolesInteresController@CalcularPuntosJornada');
    Route::get('/masalto/{Jornada_id}','RolesInteresController@show');
    Route::get('/perfil/{Quiniela_id}/','RolesInteresController@userquiniela');
});



Route::get('/register/verify/{code}', 'GuestController@verify');

Route::get('terminos','StaticController@terminos');
Route::get('privacidad','StaticController@privacidad');
Route::get('rules','StaticController@rules');

Auth::routes();

Route::get('paises','CommonController@paises');
Route::get('estados','CommonController@estados');
Route::post('estados/{code}','CommonController@estadospost');

Route::get('/home', 'HomeController@index')->name('home');

Route::post('savedatainteres', 'RolesInteresController@userquiniela');
