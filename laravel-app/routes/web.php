<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UserController::class, 'index']);

Route::get('/', [ProductController::class, 'index'])->name('products.index');
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('products.addToCart');
Route::get('remove-from-cart/{id}', [ProductController::class, 'removeFromCart'])->name('products.removeFromCart');

