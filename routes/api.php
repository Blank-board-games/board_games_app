<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/products/price/{price}', [ApiController::class, 'index']);

Route::get('/products/stock/{count_in_stock}', [ApiController::class, 'stock']);

Route::get('/products/categories/{id}', [ApiController::class, 'categories']);

Route::get('/products/default', [ApiController::class, 'default']);
