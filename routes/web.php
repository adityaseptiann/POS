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

//home//
Route::get('/', 'HomeController@index')->name('home');

Route::prefix('category')->group(function () {
    Route::get('food-beverage', 'ProductController@foodBeverage')->name('food-beverage');
    Route::get('beauty-health', 'ProductController@beautyHealth')->name('beauty-health');
    Route::get('home-care', 'ProductController@homeCare')->name('home-care');
    Route::get('baby-kid', 'ProductController@babyKid')->name('baby-kid');
});

//halaman user//

Route::get('user/{id}/name/{name}', 'UserController@show')->name('user.show');

//halaman penjualan//

Route::get('sales', 'SalesController@index')->name('sales.index');


