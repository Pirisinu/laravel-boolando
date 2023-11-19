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
    return view('first_view');
});
Route::get('/main', function () {
    return view('layouts.main_layout');
})->name('main');

Route::get('/product_layout', function () {
    dd('Raggiunto');
    return view('layouts.product_layout');
})->name('product');

