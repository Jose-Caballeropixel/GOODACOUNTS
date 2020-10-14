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




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
