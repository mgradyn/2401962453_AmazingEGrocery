<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AccountMaintenanceController;


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
    return view('index');
})->name('index');

Auth::routes();

Route::middleware(['auth'])->group(function (){
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
    Route::get('item/{item_id}', [HomeController::class, 'view'])->name('detail-item');
    Route::patch('/update-profile/{id}', [ProfileController::class, 'update'])->name('update-profile');

    Route::post('add-to-cart/{item_id}', [CartController::class, 'addToCart'])->name('add-to-cart');
    Route::delete('delete-from-cart/{order_id}', [CartController::class, 'destroyItem'])->name('delete-from-cart');
    Route::get('cart', [CartController::class, 'cart'])->name('cart');
    Route::delete('check-out', [CartController::class, 'checkOut'])->name('check-out');
});

Route::prefix('admin/')->middleware(['auth', 'isAdmin'])->group(function(){
    Route::get('/account-maintenance', [AccountMaintenanceController::class, 'maintenance'])->name('account-maintenance');
    Route::get('/update-role/{account_id}', [AccountMaintenanceController::class, 'updateRole'])->name('update-role');
    Route::patch('/change-role/{account_id}', [AccountMaintenanceController::class, 'changeRole'])->name('change-role');
    Route::delete('/delete-account/{account_id}', [AccountMaintenanceController::class, 'deleteAccount'])->name('delete-account');
});



