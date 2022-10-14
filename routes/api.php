<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['auth:sanctum']], function () {
    //get list users from API/AuthController
    Route::get('user', [App\Http\Controllers\API\AuthController::class, 'user'])->name('user');
    Route::get('users', [App\Http\Controllers\API\AuthController::class, 'users'])->name('users.index');

    Route::get('products', [App\Http\Controllers\API\HomeController::class, 'products'])->name('products');
    Route::get('brands', [App\Http\Controllers\API\HomeController::class, 'brands'])->name('brands');
    Route::get('promos', [App\Http\Controllers\API\HomeController::class, 'promos'])->name('promos');
    //all routes related to wishlists
    Route::post('wishlist/{id}/store', [App\Http\Controllers\API\HomeController::class, 'storeWishlist'])->name('wishlist.store');
    Route::delete('wishlist/{id}/delete', [App\Http\Controllers\API\HomeController::class, 'deleteWishlist'])->name('wishlist.delete');

    Route::post('editProfile', [App\Http\Controllers\API\ProfileController::class, 'editProfile'])->name('editProfile');

    //all routes related to addresses
    Route::post('address/store', [App\Http\Controllers\API\AddressController::class, 'store'])->name('address.store');
    Route::post('address/{id}/update', [App\Http\Controllers\API\AddressController::class, 'update'])->name('address.update');
    Route::delete('address/{id}/delete', [App\Http\Controllers\API\AddressController::class, 'destroy'])->name('address.delete');
});

Route::post('login', [App\Http\Controllers\API\AuthController::class, 'login'])->name('login');
Route::post('register', [App\Http\Controllers\API\AuthController::class, 'register'])->name('register');

