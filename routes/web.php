<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserOrderController;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/pizza', [PizzaController::class, 'index'])->name('pizza.index');
    Route::get('/pizza/create', [PizzaController::class, 'create'])->name('pizza.create');
    Route::post('/pizza/store', [PizzaController::class, 'store'])->name('pizza.store');
    Route::get('/pizza/{id}/edit', [PizzaController::class, 'edit'])->name('pizza.edit');
    Route::put('/pizza/{id}/update', [PizzaController::class, 'update'])->name('pizza.update');
    Route::delete('/pizza/{id}/delete', [PizzaController::class, 'destroy'])->name('pizza.destroy');


    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/category/{id}/update', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/category/{id}/delete', [CategoryController::class, 'destroy'])->name('category.destroy');

    //user order
    Route::get('/user/order', [UserOrderController::class, 'index'])->name('user.order');
    Route::post('/user/{id}/status', [UserOrderController::class, 'changestatus'])->name('order.status');

    //display all customers
    Route::get('/customers', [UserOrderController::class, 'customers'])->name('customers');
});
