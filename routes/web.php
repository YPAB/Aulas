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


Route::resource('/caracteristicas',  'CaracteristicaController');



Route::resource('/edificios',  'EdificioController');
Route::put( '/edificios/editar/{id}', 'EdificioController@update');
Route::delete( '/edificios/eliminar/{id}', 'EdificioController@destroy')->name("eliminaredificio");
