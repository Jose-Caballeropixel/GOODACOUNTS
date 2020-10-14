<?php

use Illuminate\Support\Facades\Route;

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
//creamos las rutas principales para el administrador
Route::get('/','Administrador\EmpresaController@index')->name('empresa.index');
Route::get('/empresa/create','Administrador\EmpresaController@create')->name('empresa.create');
Route::post('/empresa','Administrador\EmpresaController@store')->name('empresa.store');
//creamos la ruta de actualizar
Route::get('/empresa/{empresa}/edit','Administrador\EmpresaController@edit')->name('empresa.edit');
Route::put('/empresa/{empresa}','Administrador\EmpresaController@update')->name('empresa.update');



//rutas del generente para crear productos
Route::get('gerente/producto', 'Gerente\ProductoController@index')->name('gerente.producto.index');
Route::get('gerente/producto/create', 'Gerente\ProductoController@create')->name('gerente.producto.create');
Route::get('gerente/producto/{producto}/edit', 'Gerente\ProductoController@edit')->name('gerente.producto.edit');
Route::put('gerente/producto/{producto}', 'Gerente\ProductoController@update')->name('gerente.producto.update');
Route::get('gerente/producto/{producto}/show', 'Gerente\ProductoController@show')->name('gerente.producto.show');


Route::post('gerente/producto/store', 'Gerente\ProductoController@store')->name('gerente.producto.store');

// rutas del gerente para crear sucursales
Route::get('/gerente/sucursal','Gerente\SucursalController@index')->name('gerente.sucursal.index');
Route::get('gerente/sucursal/create','Gerente\SucursalController@create')->name('gerente.sucursal.create');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
