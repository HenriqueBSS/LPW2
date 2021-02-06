<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{UsuarioController};
use App\Http\Controllers\{FichaController};
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


Route::resource('usuario', UsuarioController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', 'App\Http\Controllers\pag1@index');

Route::get('/usuario', [UsuarioController::class, 'create'])->name('usuario.create');
Route::post('/usuario/store', [UsuarioController::class, 'store'])->name('usuario.store');
Route::get('/usuario/index', [UsuarioController::class, 'index'])->name('usuario.index');
Route::get('/usuario/show', [UsuarioController::class, 'show'])->name('usuario.show');
Route::get('/usuario/edit', [UsuarioController::class, 'edit'])->name('usuario.edit');



Route::post('/ficha/store', [FichaController::class, 'store'])->name('ficha.store');
Route::get('/ficha/create', [FichaController::class, 'create'])->name('ficha.create');
Route::get('/ficha', [FichaController::class, 'index'])->name('ficha.index');
