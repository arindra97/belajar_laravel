<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', [ProductController::class, 'home'])->name('home');

Route::get('/products', [ProductController::class, 'viewProduct'])->name('products');

Route::get('/edit/{$id}', 'App\Http\Controllers\ProductController@edit');

Route::post('/input', [ProductController::class, 'input'])->name('input');
