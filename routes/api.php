<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;

Route::apiResource('products', App\Http\Controllers\ServiceController::class);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/hi', function () {
    // Logic to retrieve and return products
    return response()->json(['message' => 'List of products']);
});

Route::post('/products', function (Request $request) {
    // Logic to create a new product
    return response()->json(['message' => 'Product created successfully', 'data' => $request->all()]);
});

Route::get('/services', [ServiceController::class, 'index']);