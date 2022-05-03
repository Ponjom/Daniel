<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/auth', [AuthController::class, 'index'])->name('auth.index');
Route::post('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/products', [ProductsController::class, 'index'])->name('product.index');
Route::get('/product/{product}', [ProductsController::class, 'show'])->name('product.show');
Route::post('/product/{product}/cart/add', [CartController::class, 'add'])->name('product.cart.add');
Route::post('/product/{product}/cart/remove', [CartController::class, 'remove'])->name('product.cart.remove');
Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/checkout', [OrderController::class, 'index'])->name('checkout.index');
Route::post('/checkout', [OrderController::class, 'store'])->name('checkout.store');
Route::middleware('auth')->group(function () {
    Route::middleware('admin')->group(function () {
        Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

        Route::get('/admin/user/{user}/change-status', [AdminController::class, 'toggleAdminStatus'])->name('admin.user.change-status');
        Route::get('/admin/user/{user}/destroy', [UserController::class, 'destroy'])->name('admin.user.destroy');

        Route::get('/admin/category/create', [CategoriesController::class, 'create'])->name('admin.category.create');
        Route::post('/admin/category', [CategoriesController::class, 'store'])->name('admin.category.store');
        Route::get('/admin/category/{category}/delete', [CategoriesController::class, 'destroy'])->name('admin.category.destroy');
        Route::get('/admin/category/{category}', [CategoriesController::class, 'edit'])->name('admin.category.edit');
        Route::put('/admin/category/{category}', [CategoriesController::class, 'update'])->name('admin.category.update');

        Route::get('/admin/product/create', [ProductsController::class, 'create'])->name('admin.product.create');
        Route::post('/admin/product', [ProductsController::class, 'store'])->name('admin.product.store');
        Route::get('/admin/product/{product}/delete', [ProductsController::class, 'destroy'])->name('admin.product.destroy');
        Route::get('/admin/product/{product}', [ProductsController::class, 'edit'])->name('admin.product.edit');
        Route::put('/admin/product/{product}', [ProductsController::class, 'update'])->name('admin.product.update');
    });
    Route::get('/profile', [UserController::class, 'index'])->name('user.index');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
