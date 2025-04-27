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

Route::get('/', function () {
    return view('welcome');
});
Route::post('/create-payement', [App\Http\Controllers\PaymentController::class, 'create'])->name('create-payment');
Route::get('/payment', [App\Http\Controllers\PaymentController::class, 'index'])->name('payment');
Route::get('/payment/{id}', [App\Http\Controllers\PaymentController::class, 'show'])->name('payment.show');
Route::post('/payment', [App\Http\Controllers\PaymentController::class, 'store'])->name('payment.store');
