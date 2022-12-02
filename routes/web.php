<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::group(['prefix' => ''], function() {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get('/about-us', [HomeController::class, 'about'])->name('home.about');
});

Route::group(['prefix' => 'admin'], function() {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
});