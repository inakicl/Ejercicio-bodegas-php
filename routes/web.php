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
Route::get('bodegas', 'BodegaController@index')->name('bodegas.index');
//vista añadir bodegas
Route::get('bodegas/add_bodegas', 'BodegaController@create')->name('bodegas.create');
//vista detalles de la bodega y sus vinos
Route::get('bodegas/detalle/{id}', 'BodegaController@show')->name('bodegas.show');
//vista detalle vinos
Route::get('bodegas/detalle/{bodegaId}/vinos/detalle/{vinoId}', 'VinoController@show')->name('vinos.show');
//vista añadir vinos
Route::get('bodegas/detalle/{bodegaId}/add_vino', 'VinoController@create')->name('vinos.create');


/**
 * Funcionalidades
 */
//borrar una bodega pasando el id
Route::delete('bodegas/delete/{id}', 'BodegaController@destroy')->name('bodegas.destroy');
//guardar bodega en base de datos
Route::get('bodegas/anyadir', 'BodegaController@store')->name('bodegas.store');
//update bodega datos
Route::get('bodegas/update', 'BodegaController@update')->name('bodegas.update');
//add_vinos
Route::get('vinos/add', 'VinoController@store')->name('vinos.store');
//update vinos
Route::get('vinos/update', 'VinoController@update')->name('vinos.update');
//borrar vinos
Route::delete('vinos/delete/{vinoId}/{bodegaId}', 'VinoController@destroy')->name('vinos.destroy');
