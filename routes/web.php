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

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/inicio', 'HomeController@index');


Route::resource('/aulas',  'AulaController');
Route::put( '/aulas/editar/{id}', 'EdificioController@update');


Route::resource('/caracteristicas',  'CaracteristicaController');


//EDIFICIO
Route::resource('/edificios',  'EdificioController');
Route::put( '/edificios/editar/{id}', 'EdificioController@update');
Route::delete( '/edificios/eliminar/{id}', 'EdificioController@destroy')->name("eliminaredificio");

//PISO
Route::resource('/pisos',  'PisoController');
Route::put( '/pisos/editar/{id}', 'PisoController@update');
Route::delete( '/pisos/eliminar/{id}', 'PisoController@destroy')->name("eliminarpiso");