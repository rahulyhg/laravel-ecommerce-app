<?php

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

Route::get('/','MainPageController@index')->name('homepage');

Route::get('/boutique','ShopController@index')->name('shop.index');
Route::get('/boutique/{slug}', 'ShopController@show')->name('shop.show');

Route::get('/panier', 'CartController@index')->name('cart.index');
Route::post('/panier', 'CartController@store')->name('cart.store');
Route::delete('/panier/{product}', 'CartController@destroy')->name('cart.destroy');

Route::post('/switchtosaveforlater/{product}', 'SaveForLaterController@switch')->name('saveforlater.switch');
Route::post('switchtocart/{product}', 'SaveForLaterController@switchToCart')->name('saveforlater.switchToCart');
Route::delete('/destroytosaveforlater/{product}', 'SaveForLaterController@destroy')->name('saveforlater.destroy');
