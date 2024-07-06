<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/v1/categories', [\App\Http\Controllers\Api\V1\CategoryController::class, 'index']);

Route::prefix('v1')->group(function() {     //включает в себя сразу группу маршрутов
    Route::apiResource('categories', \App\Http\Controllers\Api\V1\CategoryController::class);
});

