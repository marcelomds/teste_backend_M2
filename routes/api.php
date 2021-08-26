<?php

use App\Http\Controllers\Api\City\CityController;
use App\Http\Controllers\Api\City\GroupCityController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

/**
 * Rotas - Cidades
 */
Route::get('/cities', [CityController::class, 'index']);
Route::post('/cities', [CityController::class, 'store']);
Route::put('/city/{id}', [CityController::class, 'update']);
Route::delete('/city/{id}', [CityController::class, 'delete']);


/**
 * Rotas - Grupo de Cidades
 */
Route::get('/group_cities', [GroupCityController::class, 'index']);
Route::post('/group_cities', [GroupCityController::class, 'store']);
Route::put('/group_city/{id}', [GroupCityController::class, 'update']);
Route::delete('/group_city/{id}', [GroupCityController::class, 'delete']);
