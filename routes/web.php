<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/detail', function () {
    return view('detailProduct');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/news/detail', function () {
    return view('detailNews');
});

