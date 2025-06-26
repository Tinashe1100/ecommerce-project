<?php

use App\Http\Controllers\AllCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisteredCategoryController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('cart', function () {
    return view('pages.cart');
})->name('my-cart');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard.welcome');
    })->name('dashboard');
});



Route::controller(ProductController::class)->group(function () {
    Route::get('dashboard', 'index')->name('dashboard')->middleware('auth');
    // Route::get('products', 'index')->name('products');
    Route::get('add-product', 'create')->name('create.product')->middleware('auth');
    Route::post('add-product', 'store')->name('create-product')->middleware('auth');
    Route::get('product/{product}', 'show')->name('product');
    Route::post('/cart/{product}', 'cart')->name('cart');
    Route::get('edit-product/{product}', 'edit')->name('product.edit')->middleware('auth');
    Route::post('update-product/{product}', 'update')->name('edit.product')->middleware('auth');
    Route::get('delete-product/{product}', 'destroy')->name('product.drop')->middleware('auth');
    Route::get('browse-products', 'products')->name('browse');
    Route::get('products/', 'products');
    Route::get('search/', 'products');
});

Route::controller(RegisteredCategoryController::class)->group(function () {
    Route::get('registered-categories', 'index')->name('registered.categories')->middleware('auth');
    Route::get('buy-categories', 'create')->name('register.categories');
    Route::post('buy', 'store')->name('buy.category');
});


require __DIR__ . '/auth.php';
