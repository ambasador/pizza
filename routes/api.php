<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
use App\Http\Controllers\Api\PizzaController;
use App\Http\Controllers\Api\CategoryController;
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('/front')->group(function () {
    Route::get('/all-pizzas', [PizzaController::class, 'index']);
    Route::get('/single-pizza/{id}', [PizzaController::class, 'getPizzaById']);
    Route::get('/pizza/{search}', [PizzaController::class, 'search']);
   
        Route::get('/categories', [CategoryController::class, 'index']);
        Route::get('/category/{id}', [CategoryController::class, 'getCategoryById']);
        Route::get('/categories/total', [CategoryController::class, 'getTotalCategory']);
        Route::get('/categorys/{search}', [CategoryController::class, 'search']);

});