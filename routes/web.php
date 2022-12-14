<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

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
    Route::get('/contact-us', [HomeController::class, 'contact'])->name('home.contact');
    Route::get('/category', [HomeController::class, 'category'])->name('home.category');
    Route::get('/product-detail', [HomeController::class, 'productDetail'])->name('home.productDetail');
    Route::get('/login', [HomeController::class, 'login'])->name('home.login');
    Route::post('/login', [HomeController::class, 'check_login']);
});

Route::group(['prefix' => 'cart'], function() {
    Route::get('/view', [CartController::class, 'view'])->name('cart.view');
    Route::get('/add/{product}', [CartController::class, 'add'])->name('cart.add');
    Route::get('/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
    Route::get('/update/{id}', [CartController::class, 'update'])->name('cart.update');
    Route::get('/clear', [CartController::class, 'clear'])->name('cart.clear');
    Route::get('/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
});


Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'check_login']);

Route::group(['prefix' => 'admin','middleware' => 'auth'], function() {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
    Route::get('/profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::put('/profile', [AdminController::class, 'update_profile']);
    Route::get('/change_password', [AdminController::class, 'change_password'])->name('admin.change_password');
    Route::put('/change_password', [AdminController::class, 'update_password']);
    
    Route::resources([
        'category' => CategoryController::class,
        'product' => ProductController::class,
    ]);

    // Route::resource('category', CategoryController::class);
    // Route::resource('product', ProductController::class);
    // Route::group(['prefix' => 'category'], function() {
        
    //     Route::get('/', [CategoryController::class, 'index'])->name('category.index');

    //     Route::get('/create', [CategoryController::class, 'create'])->name('category.create');

    //     Route::post('/create', [CategoryController::class, 'store']);

    //     Route::get('/edit/{cat}', [CategoryController::class, 'edit'])->name('category.edit');

    //     Route::put('/update/{cat}', [CategoryController::class, 'update'])->name('category.update');
        
    //     Route::delete('/delete/{cat}', [CategoryController::class, 'delete'])->name('category.delete');

    // });

});