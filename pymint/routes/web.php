<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegsitrarseController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\LoginControlller;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\ClientesController;

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

Route::get('/home', function () {
    return view('tablero');
})->name('dashboard');



Route::get('/',[LoginControlller::class,'index'])->name('home');
Route::resource('/registrar',RegsitrarseController::class);
Route::get('/logout',[SessionController::class,'cerrar_sesion'])->name('logout');
//Route::get('/login',[SessionController::class,'index']);
Route::resource('/login',LoginControlller::class)->except([
	'index'
]);

Route::resource('/proveedores',ProveedoresController::class)->except([
	'destroy'
]);
Route::get('/proveedores/destroy/{id}',[ProveedoresController::class,'destroy'])->name('eliminar_proveedor');

Route::resource('/clientes',ClientesController::class);