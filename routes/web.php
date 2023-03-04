<?php

use App\Http\Controllers\Home\ProductsController;
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

Route::prefix('/fashion')->group(function () {
    Route::get('/create', [ProductsController::class, 'create'])->name('home.create');
    Route::get('/', [ProductsController::class, 'index'])->name('home.index');
    Route::get('/product', [ProductsController::class, 'all'])->name('home.list');
    Route::get('/{id}', [ProductsController::class, 'show'])->name('home.show');
    Route::post('/', [ProductsController::class, 'store'])->name('home.store');
    // =============================

});

Route::get('/cart', [ProductsController::class, 'cart'])->name('home.cart');
Route::get('/check-out', [ProductsController::class, 'check'])->name('home.checkout');
Route::get('/oder', [ProductsController::class, 'oder'])->name('home.oder');
Route::get('/profile', [ProductsController::class, 'profile'])->name('home.profile');
Route::get('/address', [ProductsController::class, 'address'])->name('home.address');
Route::get('/editAddress', [ProductsController::class, 'editAddress'])->name('home.editAddress');

// Route::get('/cart', function ()
// {
//     return view('home.cart');
// });
