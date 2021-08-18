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
Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function() {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
//    Costumers
    Route::get('/costumers', [CostumersController::class, 'index'])->name('costumers');
    Route::get('/costumers/add', [CostumersController::class, 'create'])->name('costumers.add');
    Route::get('/costumers/edit/{id}', [CostumersController::class, 'edit'])->name('costumers.edit');
    Route::put('/costumers/update/{id}', [CostumersController::class, 'update'])->name('costumers.update');
    Route::post('/costumers/destroy', [CostumersController::class, 'destroy'])->name('costumers.destroy');
    Route::post('/costumers/store', [CostumersController::class, 'store'])->name('costumers.store');
//    Products
    Route::get('/products', [ProductsController::class, 'index'])->name('products');
    Route::get('/products/add', [ProductsController::class, 'create'])->name('products.add');
    Route::get('/products/edit/{id}', [ProductsController::class, 'edit'])->name('products.edit');
    Route::put('/products/update/{id}', [ProductsController::class, 'update'])->name('products.update');
    Route::post('/products/destroy', [ProductsController::class, 'destroy'])->name('products.destroy');
    Route::post('/products/store', [ProductsController::class, 'store'])->name('products.store');
//      Orders
    Route::get('/orders', [OrdersController::class, 'index'])->name('orders');
    Route::get('/orders/add', [OrdersController::class, 'create'])->name('orders.add');
    Route::get('/orders/edit/{id}', [OrdersController::class, 'edit'])->name('orders.edit');
    Route::put('/orders/update/{id}', [OrdersController::class, 'update'])->name('orders.update');
    Route::post('/orders/destroy', [OrdersController::class, 'destroy'])->name('orders.destroy');
    Route::post('/orders/store', [OrdersController::class, 'store'])->name('orders.store');
});

Auth::routes();
Route::get('/logout', function() {
    Auth::logout();
    return redirect('login');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
