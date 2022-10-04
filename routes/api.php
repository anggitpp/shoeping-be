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
});

Route::post('login', [App\Http\Controllers\API\AuthController::class, 'login'])->name('login');
Route::post('register', [App\Http\Controllers\API\AuthController::class, 'register'])->name('register');

