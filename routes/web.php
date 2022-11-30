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
// php artisan serve
Route::get('/', function () {
     // resources/views/welcome.blade.php
    return view('welcome');
});

Route::get('/product/{id}/{name}', function ($product_id, $pro_name) {
    // resources/views/about.blade.php
    return view('about', compact('product_id','pro_name'));
    // return view('about',[
    //     'pro_id' => $product_id
    // ]);
    // return view('about')->with('product_id', $product_id);
});

Route::get('ten_route', function() {
    return view('welcome');
});