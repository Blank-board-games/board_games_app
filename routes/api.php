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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

use App\Http\Controllers\ProductController;

Route::post('product/add', [ProductController::class, 'add']);

use App\Http\Controllers\CategoryController;

Route::post('category/add', [CategoryController::class, 'add']);

use App\Http\Controllers\ApiController;

Route::get('/products/{price}', [ApiController::class, 'index']);
