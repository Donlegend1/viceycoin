<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/save-wallet', function (Request $request) {
    $validated = $request->validate([
        'address' => 'required|string',
    ]);

    // For now, return the validated address
    return response()->json([
        'message' => 'Wallet address saved successfully.',
        'address' => $validated['address'],
    ]);
});
