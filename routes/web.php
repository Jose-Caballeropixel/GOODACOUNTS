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

Route::get('/', function () {
    return view('welcome');
});


Route::get('gerente/producto', 'Gerente\ProductoController@index')->name('gerente.producto.index');
Route::get('gerente/producto/create', 'Gerente\ProductoController@create')->name('gerente.producto.create');

Route::post('gerente/producto/store', 'Gerente\ProductoController@store')->name('gerente.producto.store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
