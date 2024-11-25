<?php

use App\Http\Controllers\ProductosController;
use Illuminate\Support\Facades\Route;



Route::get('/', [ProductosController::class, 'index'])->name('productos.index');
Route::get('/create', [ProductosController::class, 'create'])->name('productos.create');
Route::post('/store', [ProductosController::class, 'store'])->name('productos.store');
Route::get('/edit/{Id}', [ProductosController::class, 'edit'])->name('productos.edit');
Route::put('/update/{Id}', [ProductosController::class, 'update'])->name('productos.update');
Route::get('/show/{Id}', [ProductosController::class, 'show'])->name('productos.show');
Route::delete('/destroy/{Id}', [ProductosController::class, 'destroy'])->name('productos.destroy');

