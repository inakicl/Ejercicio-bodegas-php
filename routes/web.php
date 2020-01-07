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
    return redirect('bodegas');
});

/**
 * Vista
 */
//vista pagina principal
Route::get('bodegas', 'BodegaController@index');
//vista añadir bodegas
Route::get('bodegas/add_bodegas', 'BodegaController@edit');
//vista detalles de la bodega y sus vinos
Route::get('bodegas/detalle/{id}', 'BodegaController@show');
//vista detalle vino
Route::get('bodegas/detalle/{bodegaId}/vino/detalle/{vinoId}', 'VinoController@show');
//vista añadir vino
Route::get('bodegas/detalle/{id}/add_vino', 'VinoController@edit');


/**
 * Funcionalidades
 */
//borrar una bodega pasando el id
Route::get('bodegas/delete/{id}', 'BodegaController@deleteRow');
//guardar bodega en base de datos
Route::get('bodegas/anyadir', 'BodegaController@store');
//update bodega datos
Route::get('bodegas/update', 'BodegaController@update');
//add_vinos
Route::get('vino/add', 'VinoController@store');
//update vino
Route::get('vino/update', 'VinoController@update');
//borrar vino
Route::get('vino/delete/{vinoId}/{bodegaId}', 'VinoController@deleteRow');
