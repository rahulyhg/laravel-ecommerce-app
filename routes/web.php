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

/* Main Page */
Route::get('/', 'MainPageController@index')->name('homepage');

/* Shop */
Route::get('/boutique', 'ShopController@index')->name('shop.index');
Route::get('/boutique/{slug}', 'ShopController@show')->name('shop.show');

/* Cart */
Route::get('/panier', 'CartController@index')->name('cart.index');
Route::post('/panier', 'CartController@store')->name('cart.store');
Route::patch('/panier/{product}', 'CartController@update')->name('cart.update');
Route::delete('/panier/{product}', 'CartController@destroy')->name('cart.destroy');

/* SwitchToCart */
Route::post('/switchtosaveforlater/{product}', 'SaveForLaterController@switch')->name('saveforlater.switch');
Route::post('switchtocart/{product}', 'SaveForLaterController@switchToCart')->name('saveforlater.switchToCart');
Route::delete('/destroytosaveforlater/{product}', 'SaveForLaterController@destroy')->name('saveforlater.destroy');

/* Checkout */
Route::get('/paiement', 'CheckoutController@index')->name('checkout.index');
Route::post('/paiement', 'CheckoutController@store')->name('checkout.store');

/* Coupon */
Route::post('/coupon', 'CouponsController@store')->name('coupon.store');
Route::delete('/coupon', 'CouponsController@destroy')->name('coupon.destroy');
