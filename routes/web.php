<?php
use App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

//home
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('category')->group(function () {
    Route::get('food-beverage', [ProductController::class, 'foodBeverage'])->name('food-beverage');
    Route::get('beauty-health', [ProductController::class, 'beautyHealth'])->name('beauty-health');
    Route::get('home-care', [ProductController::class, 'homeCare'])->name('home-care');
    Route::get('baby-kid', [ProductController::class, 'babyKid'])->name('baby-kid');
});


//halaman user
use App\Http\Controllers\UserController;

Route::get('user/{id}/name/{name}', [UserController::class, 'show'])->name('user.show');

//halaman penjualan
use App\Http\Controllers\SalesController;

Route::get('sales', [SalesController::class, 'index'])->name('sales.index');


