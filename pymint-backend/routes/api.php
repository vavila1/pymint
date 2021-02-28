<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrarCuentaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProductosController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('cuentas',RegistrarCuentaController::class);

Route::post('/login',[LoginController::class,'login']);
Route::apiResource('proveedores',ProveedoresController::class);
Route::get('/usuario/proveedores/{id}',[ProveedoresController::class,'proveedores']);
Route::apiResource('clientes',ClientesController::class);
Route::get('/usuario/clientes/{id}',[ClientesController::class,'clientes']);
Route::apiResource('proveedores.productos',ProductosController::class);
