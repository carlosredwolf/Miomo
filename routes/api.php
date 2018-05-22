<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('paises','CommonController@paises');
Route::get('estados/{code}','CommonController@estados');
Route::get('ciudades/{code}/{state}','CommonController@ciudades');

Route::resource('evento','EventoController');
