<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\HewanController;
use App\Http\Controllers\Api\PenitipanController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('hewan', HewanController::class);
Route::apiResource('penitipan', PenitipanController::class);