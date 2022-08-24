<?php

use App\Http\Controllers\CatalogueController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;


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

// Route::get('/', function () {
//     return view('homepage');
// });

Route::get('/', [CatalogueController::class, 'homepage']);

Route::get('/test', [CategoryController::class, 'index']);

Route::get('/full', [CatalogueController::class, 'index']);


Route::get('/catalogue', function () {
    return view('collection/collection');
});

Route::get('/catalogue/filters', function () {
    return view('collection/filters');
});

Route::get('/catalogue/filtersfull', function () {
    return view('collection/filtersfull');
});

Route::get('/about', function () {
    return view('about/about');
});
