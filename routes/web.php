<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('home');
});


Route::get('/products', [ProductController::class, 'index'])->name(name: 'products');
Route::get('/products/{id}', [ProductController::class, 'show'])->name(name: 'products.show');


Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
