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
Route::get('/administrador/empresa/create','Administrador\EmpresaController@create')->name('administrador.empresa.create');
Route::post('/administrador/empresa','Administrador\EmpresaController@store')->name('administrador.empresa.store');
//creamos la ruta de actualizar
Route::get('/administrador/empresa/{empresa}/edit','Administrador\EmpresaController@edit')->name('administrador.empresa.edit');
Route::put('/administrador/empresa/{empresa}','Administrador\EmpresaController@update')->name('administrador.empresa.update');


Route::get('/','Administrador\EmpresaController@index')->name('empresa.index');
Route::get('/empresa/create','Administrador\EmpresaController@create')->name('empresa.create');
Route::post('/empresa','Administrador\EmpresaController@store')->name('empresa.store');

//Rutas de aministrador para crear usuario
Route::get('/administrador/usuarios', 'Administrador\UserController@index')->name('administrador.usuarios.index');
Route::get('/administrador/usuarios/create', 'Administrador\UserController@create')->name('administrador.usuarios.create');
Route::post('/administrador/usuarios/store', 'Administrador\UserController@store')->name('administrador.usuarios.store');


Route::get('/empresa','Administrador\EmpresaController@index')->name('administrador.empresa.index');
Route::get('/empresa/create','Administrador\EmpresaController@create')->name('administrador.empresa.create');
Route::post('/empresa','Administrador\EmpresaController@store')->name('administrador.empresa.store');
Route::get('/empresa/{empresa}/edit','Administrador\EmpresaController@edit')->name('administrador.empresa.edit');
Route::put('/empresa/{empresa}','Administrador\EmpresaController@update')->name('administrador.empresa.update');
//creamos la ruta de actualizar



Route::get('/empresa/{empresa}/edit','Administrador\EmpresaController@edit')->name('administrador.empresa.edit');
Route::put('/empresa/{empresa}','Administrador\EmpresaController@update')->name('administrador.empresa.update');

// Redireccion a Dashboard Segun Rol
Route::get('/administrador' ,'Administrador\HomeController@index')->name('administrador.index');
Route::get('/gerente' ,'Gerente\HomeController@index')->name('gerente.index');


Route::get('/administrador' ,'Administrador\HomeController@index')->name('administrador.index');
Route::get('/gerente' ,'Administrador\HomeController@index')->name('gerente.index');


//rutas del generente para crear productos
Route::get('gerente/producto', 'Gerente\ProductoController@index')->name('gerente.producto.index');
Route::get('gerente/producto/create', 'Gerente\ProductoController@create')->name('gerente.producto.create');
Route::get('gerente/producto/{producto}/edit', 'Gerente\ProductoController@edit')->name('gerente.producto.edit');
Route::put('gerente/producto/{producto}', 'Gerente\ProductoController@update')->name('gerente.producto.update');
Route::get('gerente/producto/{producto}/show', 'Gerente\ProductoController@show')->name('gerente.producto.show');
Route::post('gerente/producto/store', 'Gerente\ProductoController@store')->name('gerente.producto.store');


// rutas del gerente para crear sucursales
Route::get('/gerente','Gerente\SucursalController@index')->name('gerente.sucursal.index');
Route::get('/gerente/sucursal/create','Gerente\SucursalController@create')->name('gerente.sucursal.create');
Route::post('/gerente/sucursal/store','Gerente\SucursalController@store')->name('gerente.sucursal.store');
Route::get('/gerente/sucursal/{sucursal}/edit','Gerente\SucursalController@edit')->name('gerente.sucursal.edit');
Route::put('/gerente/sucursal/{sucursal}','Gerente\SucursalController@update')->name('gerente.sucursal.update');

// ruta para crear bodegas
Route::get('/gerente/bodega','Gerente\BodegaController@index')->name('gerente.bodega.index');
Route::get('/gerente/bodega/create/{sucursal}','Gerente\BodegaController@crearBodega')->name('gerente.bodega.create');
Route::post('/gerente/bodega/store','Gerente\BodegaController@store')->name('gerente.bodega.store');

//rutas para crear clientes
Route::get('vendedor/cliente','Vendedor\ClienteController@index')->name('vendedor.cliente.index');
Route::get('vendedor/cliente/create','Vendedor\ClienteController@create')->name('vendedor.cliente.create');
Route::post('vendedor/cliente/store','Vendedor\ClienteController@store')->name('vendedor.cliente.store');
Route::get('vendedor/cliente/{cliente}/edit','Vendedor\ClienteController@edit')->name('vendedor.cliente.edit');
Route::put('vendedor/cliente/{cliente}','Vendedor\ClienteController@update')->name('vendedor.cliente.update');


Route::post('gerente/producto/buscar', 'Gerente\ProductoController@buscar')->name('gerente.producto.buscar');




// rutas del gerente para crear sucursales
Route::get('/gerente/sucursal','Gerente\SucursalController@index')->name('gerente.sucursal.index');
Route::get('/sucursal/create','Gerente\SucursalController@create')->name('gerente.sucursal.create');
//ruta para agregar sucursal
Route::post('/sucursal/store','Gerente\SucursalController@store')->name('gerente.sucursal.store');
//ruta para actualizar
Route::get('/sucursal/{sucursal}/edit','Gerente\SucursalController@edit')->name('gerente.sucursal.edit');
Route::put('/sucursal/{sucursal}','Gerente\SucursalController@update')->name('gerente.sucursal.update');

//Rutas de gerente para crear usuario
Route::get('/gerente/usuarios', 'Gerente\UserController@index')->name('gerente.usuarios.index');
Route::get('/gerente/usuarios/create', 'Gerente\UserController@create')->name('gerente.usuarios.create');
Route::post('/gerente/usuarios/store', 'Gerente\UserController@store')->name('gerente.usuarios.store');



Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
