<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\CitasController;
use App\Http\Controllers\TratamientosController;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\Cantidad;


/*Aplicacion de parte del Cliente */
Route::get('/shop', function () {
	return view('shop/shop');
});


/*Aplicacion de parte del servidor */
Route::get('/', function () {
	return view('PeluWelcome');
});

Route::get('lang/{lang}', function ($lang) {
	session(['lang' => $lang]);
	return \Redirect::back();
})->where([
	'lang' => 'en|es'
]);

Route::get('auth/google', [LoginController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [LoginController::class, 'handleGoogleCallback']);
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
	Route::resource('citas', CitasController::class);
	Route::resource('tratamientos', TratamientosController::class);
	Route::resource('productos', ProductosController::class);
	Route::resource('proveedores', ProveedoresController::class);
	Route::resource('clientes', ClientesController::class);
	Route::resource('empleados', EmpleadosController::class);
	Route::get('myPDF', [CitasController::class, 'generatePDF']);
	Route::post('productos', [ProductosController::class,'store'])->name('productos.store')->middleware(Cantidad::class);
});
Route::middleware(['auth:sanctum', 'verified'])->get('/menu', function () {
return view('menu');
})->name('menu');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
/*Aplicacion de parte del Cliente de la peluqueria, la tienda.*/






