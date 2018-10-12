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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index');

Route::get('/index', 'HomeController@index');

Route::get('/descripcion', 'HomeController@descripcion');

Route::get('/perfil', 'HomeController@perfil');

Route::get('/modulo1', 'HomeController@curso');

Auth::routes();
