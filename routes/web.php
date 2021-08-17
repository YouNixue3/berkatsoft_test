<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\dashboard\DashboardController;
use App\Http\Controllers\dashboard\CostumersController;
use App\Http\Controllers\dashboard\ProductsController;
use App\Http\Controllers\dashboard\OrdersController;

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
Route::group(['prefix' => 'dashboard'], function() {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/costumers', [CostumersController::class, 'index'])->name('costumers');
    Route::get('/products', [ProductsController::class, 'index'])->name('products');
    Route::get('/orders', [OrdersController::class, 'index'])->name('orders');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
