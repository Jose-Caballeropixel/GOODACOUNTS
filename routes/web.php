<?php

use Illuminate\Support\Facades\Auth;
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
Route::get('/','Administrador\EmpresaController@index')->name('administrador.empresa.index');
Route::get('/empresa/create','Administrador\EmpresaController@create')->name('administrador.empresa.create');
Route::post('/empresa','Administrador\EmpresaController@store')->name('administrador.empresa.store');
//creamos la ruta de actualizar
<<<<<<< HEAD
Route::get('/empresa/{empresa}/edit','Administrador\EmpresaController@edit')->name('empresa.edit');
Route::put('/empresa/{empresa}','Administrador\EmpresaController@update')->name('empresa.update');
Route::get('/administrador' ,'Administrador\HomeController@index')->name('administrador.index');
Route::get('/gerente' ,'Administrador\HomeController@index')->name('gerente.index');



Route::get('/', function () {
    return view('welcome');
});
=======
Route::get('/empresa/{empresa}/edit','Administrador\EmpresaController@edit')->name('administrador.empresa.edit');
Route::put('/empresa/{empresa}','Administrador\EmpresaController@update')->name('administrador.empresa.update');

>>>>>>> 12dfff69fd02e6f5d3fcc91a76a0f05fcd3a7383


//rutas del generente para crear productos
Route::get('gerente/producto', 'Gerente\ProductoController@index')->name('gerente.producto.index');
Route::get('gerente/producto/create', 'Gerente\ProductoController@create')->name('gerente.producto.create');
Route::get('gerente/producto/{producto}/edit', 'Gerente\ProductoController@edit')->name('gerente.producto.edit');
Route::put('gerente/producto/{producto}', 'Gerente\ProductoController@update')->name('gerente.producto.update');
Route::get('gerente/producto/{producto}/show', 'Gerente\ProductoController@show')->name('gerente.producto.show');


Route::post('gerente/producto/store', 'Gerente\ProductoController@store')->name('gerente.producto.store');

<<<<<<< HEAD
=======
// rutas del gerente para crear sucursales
Route::get('/gerente/sucursal','Gerente\SucursalController@index')->name('gerente.sucursal.index');
Route::get('/sucursal/create','Gerente\SucursalController@create')->name('gerente.sucursal.create');
//ruta para agregar sucursal
Route::post('/sucursal/store','Gerente\SucursalController@store')->name('gerente.sucursal.store');
//ruta para actualizar
Route::get('/sucursal/{sucursal}/edit','Gerente\SucursalController@edit')->name('gerente.sucursal.edit');
Route::put('/sucursal/{sucursal}','Gerente\SucursalController@update')->name('gerente.sucursal.update');




>>>>>>> 12dfff69fd02e6f5d3fcc91a76a0f05fcd3a7383
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
