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
    return view('auth.login');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//USERS ROUTES

Route::get('users/{id}/deleteImage', [App\Http\Controllers\UserController::class, 'deleteImage'])->name('users.deleteImage');
Route::resource('users', App\Http\Controllers\UserController::class);
Route::group(['prefix' => 'users'], function () {
    Route::get('{id}/wishlists', [App\Http\Controllers\UserController::class, 'wishlists'])->name('users.wishlists.index');
    Route::put('{id}/wishlists', [App\Http\Controllers\UserController::class, 'wishlistUpdate'])->name('users.wishlists.update');

    Route::get('{id}/payments', [App\Http\Controllers\UserController::class, 'payments'])->name('users.payments.index');
    Route::put('{id}/payments', [App\Http\Controllers\UserController::class, 'paymentUpdate'])->name('users.payments.update');

    Route::get('{id}/addresses', [App\Http\Controllers\UserController::class, 'addresses'])->name('users.addresses.index');
    Route::get('{id}/addresses/create', [App\Http\Controllers\UserController::class, 'addressCreate'])->name('users.addresses.create');
    Route::post('{id}/addresses', [App\Http\Controllers\UserController::class, 'addressStore'])->name('users.addresses.store');
    Route::get('{id}/addresses/{address_id}/edit', [App\Http\Controllers\UserController::class, 'addressEdit'])->name('users.addresses.edit');
    Route::put('{id}/addresses/{address_id}', [App\Http\Controllers\UserController::class, 'addressUpdate'])->name('users.addresses.update');
    Route::delete('{id}/addresses/{address_id}', [App\Http\Controllers\UserController::class, 'addressDestroy'])->name('users.addresses.destroy');
});

//BRANDS ROUTE
Route::get('brands/{id}/deleteImage', [App\Http\Controllers\BrandController::class, 'deleteImage'])->name('brands.deleteImage');
Route::resource('/brands', App\Http\Controllers\BrandController::class);

//PRODUCTS ROUTE
Route::get('products/{id}/deleteImage', [App\Http\Controllers\ProductController::class, 'deleteImage'])->name('products.deleteImage');
Route::resource('/products', App\Http\Controllers\ProductController::class);
Route::get('products/{id}/stocks/', [App\Http\Controllers\ProductController::class, 'stocks'])->name('products.stocks');
Route::get('products/{id}/stocks/create', [App\Http\Controllers\ProductController::class, 'stocksCreate'])->name('products.stocks.create');
Route::post('products/{id}/stocks/store', [App\Http\Controllers\ProductController::class, 'stocksStore'])->name('products.stocks.store');
Route::get('products/stocks/{id}/edit', [App\Http\Controllers\ProductController::class, 'stocksEdit'])->name('products.stocks.edit');
Route::put('products/stocks/{id}/update', [App\Http\Controllers\ProductController::class, 'stocksUpdate'])->name('products.stocks.update');
Route::delete('products/stocks/{id}/destroy', [App\Http\Controllers\ProductController::class, 'stocksDestroy'])->name('products.stocks.destroy');

//TRANSACTIONS ROUTE
Route::get('transactions/{id}/detail/create', [App\Http\Controllers\TransactionController::class, 'detailCreate'])->name('transactions.detail.create');
Route::post('transactions/{id}/detail/store', [App\Http\Controllers\TransactionController::class, 'detailStore'])->name('transactions.detail.store');
Route::get('transactions/{id}/detail/{detail_id}/edit', [App\Http\Controllers\TransactionController::class, 'detailEdit'])->name('transactions.detail.edit');
Route::put('transactions/{id}/detail/{detail_id}/update', [App\Http\Controllers\TransactionController::class, 'detailUpdate'])->name('transactions.detail.update');
Route::delete('transactions/{id}/detail/{detail_id}/destroy', [App\Http\Controllers\TransactionController::class, 'detailDestroy'])->name('transactions.detail.destroy');
Route::resource('/transactions', App\Http\Controllers\TransactionController::class);

//PROMOS ROUTE
Route::get('promos/{id}/deleteImage', [App\Http\Controllers\PromoController::class, 'deleteImage'])->name('promos.deleteImage');
Route::resource('/promos', App\Http\Controllers\PromoController::class);

//PAYMENT METHOD ROUTE
Route::get('payment-methods/{id}/deleteImage', [App\Http\Controllers\PaymentMethodController::class, 'deleteImage'])->name('payment-methods.deleteImage');
Route::resource('/payment-methods', App\Http\Controllers\PaymentMethodController::class);


