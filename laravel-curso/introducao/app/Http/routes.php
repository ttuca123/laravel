<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clientes/listar', "clienteController@listar");

Route::get('/clientes/listar2', "clienteController@listar2");

Route::get('/clientes/novo', "clienteController@novo");

Route::get('/clientes/editar/{id?}', "clienteController@editar");
