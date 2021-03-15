<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\MensajesController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\UsuariosController;


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
Route::post('listproduct', [ProductosController::class, 'listproduct'] );
Route::get('banner', [ProductosController::class, 'banner'] );
Route::post('pedidos', [PedidosController::class, 'pedidos'] );

Route::post('login', [UsuariosController::class, 'login'] );
Route::post('register', [UsuariosController::class, 'register'] );

Route::post('contact', [MensajesController::class, 'contact']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
