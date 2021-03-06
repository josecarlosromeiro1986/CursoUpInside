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
    return view('welcome');
});

Route::get('imoveis', 'PropertiesController@index');

Route::get('imoveis/novo', 'PropertiesController@create');
Route::post('imoveis/store', 'PropertiesController@store');

Route::get('imoveis/{name}', 'PropertiesController@show');

Route::get('imoveis/editar/{name}', 'PropertiesController@edit');
Route::put('imoveis/update/{name}', 'PropertiesController@update');

Route::get('imoveis/remover/{name}', 'PropertiesController@destroy');