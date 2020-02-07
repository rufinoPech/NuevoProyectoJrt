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

// Route::get('/', function () {
//     return view('');
// });


/////////// VISTAS /////////////

Route::View('admin','crud.ingresos');
Route::View('users','crud.users');
Route::View('administrador','layouts.administrador');
Route::View('inicio','crud.inicio');
Route::View('gastos','crud.gastos');
Route::View('login','crud.login');
Route::View('registro','crud.registro');
Route::View('error','crud.error');

//////////// APIS //////////////

Route::apiResource('apiIngresos','ApiIngresosController');
Route::apiResource('apiGastos','ApiGastosController');
Route::apiResource('apiInicio','ApiInicioController');
Route::apiResource('apiUsuarios','ApiUsuarioController');
Route::apiResource('apiRegistro','ApiRegistroController');


/////////////////////////////


Route::view('/','login');
Route::post('login','AccesoController@validar');
Route::get('logout','AccesoController@salir');





