<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\ProductController;
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
Route::get('/catalogue/product/{id}', [CatalogueController::class, 'showProduct'])->where(['id' => '[0-9]+']);
Route::get('/catalogue/search', [CatalogueController::class, 'showSearch']);
Route::get('/cart', [CartController::class, 'index']);
Route::post('/cart/add', [CartController::class, 'addToCart']);
Route::put('/cart/update', [CartController::class, 'update']);
Route::delete('/cart/remove', [CartController::class, 'remove']);
Route::get('/checkout', [CartController::class, 'checkoutIndex']);
Route::post('/checkout', [CartController::class, 'checkout']);

Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->where(['id' => '[0-9]+']);
Route::get('/product/delete/{id}', [ProductController::class, 'delete'])->where(['id' => '[0-9]+']);


Route::get('/full', function () {
    return view('collection/collectionfull');
});

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

Route::get('/dashboard', [CategoryController::class, 'index'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
