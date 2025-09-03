<?php

use App\Http\Controllers\SarcasmController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [SarcasmController::class, 'index']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('sarcasm')->group(function () {
    Route::get('/', [SarcasmController::class, 'random']);
    Route::get('/show/{id}', [SarcasmController::class, 'show']);
    Route::get('/random', [SarcasmController::class, 'random']);
});