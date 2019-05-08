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
<<<<<<< HEAD
//Route::post( 'aulas/create', 'AulaController@store');
=======
Route::resource('/edificios',  'EdificioController');
>>>>>>> 1fb0447848ba7b9e92ac1713ec0d5dc974a92e2b
