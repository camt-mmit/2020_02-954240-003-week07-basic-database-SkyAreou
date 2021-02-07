<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', [ProductController::class, 'list'])
->name('product-list');

Route::get('/product/{product}', [ProductController::class, 'show'])
->name('product-view');

Route::get('/shop', [ShopController::class, 'list'])
->name('shop-list');

Route::get('/shop/{shop}', [ShopController::class, 'show'])
->name('shop-view');