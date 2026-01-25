<?php

use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\AuthAdminController;
use App\Http\Controllers\AuthSiswaController;
use App\Http\Controllers\InputAspirasiController;
use App\Http\Controllers\KategoriController;
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

Route::apiResource('/kategori', KategoriController::class);
Route::apiResource('/input_aspirasi', InputAspirasiController::class);
Route::apiResource('/aspirasi', AspirasiController::class);
