<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\POSController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\InformeController;

/*
|--------------------------------------------------------------------------
| Rutas principales
|--------------------------------------------------------------------------
*/

// Página principal -> redirige al POS
Route::get('/', function () {
    return redirect('/pos');
});

/*
|--------------------------------------------------------------------------
| POS (Punto de venta)
|--------------------------------------------------------------------------
*/
Route::get('/pos', [POSController::class, 'index'])->name('pos.index');
Route::post('/pos/venta', [POSController::class, 'registrarVenta'])->name('pos.venta');

/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

/*
|--------------------------------------------------------------------------
| Gestión de Productos
|--------------------------------------------------------------------------
*/
Route::get('/admin/productos', [ProductoController::class, 'index'])->name('productos.index');
Route::get('/admin/productos/create', [ProductoController::class, 'create'])->name('productos.create');
Route::post('/admin/productos', [ProductoController::class, 'store'])->name('productos.store');
Route::get('/admin/productos/{id}/edit', [ProductoController::class, 'edit'])->name('productos.edit');
Route::put('/admin/productos/{id}', [ProductoController::class, 'update'])->name('productos.update');
Route::delete('/admin/productos/{id}', [ProductoController::class, 'destroy'])->name('productos.destroy');

/*
|--------------------------------------------------------------------------
| Gestión de Clientes
|--------------------------------------------------------------------------
*/
Route::get('/admin/clientes', [ClienteController::class, 'index'])->name('clientes.index');
Route::get('/admin/clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
Route::post('/admin/clientes', [ClienteController::class, 'store'])->name('clientes.store');
Route::get('/admin/clientes/{id}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');
Route::put('/admin/clientes/{id}', [ClienteController::class, 'update'])->name('clientes.update');
Route::delete('/admin/clientes/{id}', [ClienteController::class, 'destroy'])->name('clientes.destroy');

/*
|--------------------------------------------------------------------------
| Informes de Ventas
|--------------------------------------------------------------------------
*/
Route::get('/admin/informes', [InformeController::class, 'index'])->name('informes.index');
Route::post('/admin/informes/filtrar', [InformeController::class, 'filtrar'])->name('informes.filtrar');