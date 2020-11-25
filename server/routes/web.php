<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/products',function () {
    return "<h1>All Products</h1>";
});

Route::get('/products/create',function () {
    return "<h1>Add New Products</h1>";
});

Route::get('/products/{product_is}',function ($product) {
    return "<h1>Product {$product}</h1>";
});
