<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index'])->name('Products.index');
Route::get('/create', [ProductController::class, 'create'])->name('Products.create');
Route::post('/store', [ProductController::class, 'store'])->name('Products.store');
Route::get('/{id}/edit', [ProductController::class, 'edit']);
Route::put('/{id}/update', [ProductController::class, 'update'])->name('Products.update');
Route::get('/{id}/delete', [ProductController::class, 'delete'])->name('Products.delete');