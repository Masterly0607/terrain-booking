<?php

use App\Http\Controllers\TerrainController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// 👇 Wrap all terrain routes with auth
Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('terrains', TerrainController::class);
});

