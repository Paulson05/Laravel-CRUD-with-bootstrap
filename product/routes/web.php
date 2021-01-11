<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('main');
});
Route::get('/product/index', [App\Http\Controllers\ProductController::class, 'index'])->name('index');
Route::get('/product/create', [App\Http\Controllers\ProductController::class, 'create'])->name('create');
Route::post('/product/store', [App\Http\Controllers\ProductController::class, 'store'])->name('store');
Route::get('edit/product/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('edit');
Route::get('delete/product/{id}', [App\Http\Controllers\ProductController::class, 'delete'])->name('delete');
Route::get('show/product/{id}', [App\Http\Controllers\ProductController::class, 'show'])->name('show');

Route::post('update/product/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('update');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
