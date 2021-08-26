<?php

use App\Http\Controllers\Api\City\CityController;
use App\Http\Controllers\Api\City\GroupCityController;
use App\Http\Controllers\Api\Product\ProductController;
use App\Http\Controllers\Api\Product\ProductDiscountController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

/**
 * Rotas - Grupo de Cidades
 */
Route::get('/group_cities', [GroupCityController::class, 'index']);
Route::post('/group_cities', [GroupCityController::class, 'store']);
Route::put('/group_city/{id}', [GroupCityController::class, 'update']);
Route::delete('/group_city/{id}', [GroupCityController::class, 'delete']);

/**
 * Rotas - Cidades
 */
Route::get('/cities', [CityController::class, 'index']);
Route::post('/cities', [CityController::class, 'store']);
Route::put('/city/{id}', [CityController::class, 'update']);
Route::delete('/city/{id}', [CityController::class, 'delete']);

/**
 * Rotas - Produtos
 */
Route::get('/products', [ProductController::class, 'index']);
Route::post('/products', [ProductController::class, 'store']);
Route::put('/product/{id}', [ProductController::class, 'update']);
Route::delete('/product/{id}', [ProductController::class, 'delete']);


/**
 * Rotas - Descontos de Produtos
 */
Route::get('/products_discount', [ProductDiscountController::class, 'index']);
Route::post('/products_discount', [ProductDiscountController::class, 'store']);
Route::put('/product_discount/{id}', [ProductDiscountController::class, 'update']);
Route::delete('/product_discount/{id}', [ProductDiscountController::class, 'delete']);
