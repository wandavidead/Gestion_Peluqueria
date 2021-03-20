<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\CitasController;
use App\Http\Controllers\TratamientosController;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Cantidad;

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
	return view('dashboard');
})->name('dashboard');

//Pagina principal
Route::get('/', function () {
	return view('PeluWelcome');
});

//Esta parte se encarga de la traducion
Route::get('lang/{lang}', function ($lang) {
	session(['lang' => $lang]);
	return \Redirect::back();
})->where([
	'lang' => 'en|es'
]);

Route::middleware(['auth'])->group(function () {
	Route::resource('citas', CitasController::class);
	Route::resource('tratamientos', TratamientosController::class);
	Route::resource('productos', ProductosController::class);
	Route::resource('proveedores', ProveedoresController::class);
	Route::resource('clientes', ClientesController::class);
	Route::resource('empleados', EmpleadosController::class);
	Route::get('myPDF', [CitasController::class, 'generatePDF']);
	Route::post('productos', [ProductosController::class, 'store'])->name('productos.store')->middleware(Cantidad::class);
	Route::get('/menu', function () {
		return view('menu');
	})->name('menu');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
