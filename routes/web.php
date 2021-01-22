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

//Route::resource('usuario', UsuarioController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', 'App\Http\Controllers\pag1@index');

Route::get('/usuario', 'App\Http\Controllers\UsuarioController@show');
Route::get('/usuario', 'App\Http\Controllers\UsuarioController@index');
Route::get('/usuario', 'App\Http\Controllers\UsuarioController@create');

