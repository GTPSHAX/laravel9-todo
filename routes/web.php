<?php

use App\Http\Controllers\AuthAdminController;
use App\Http\Controllers\AuthSiswaController;
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

Route::post('/auth/admin/handle', [AuthAdminController::class, 'login'])->name('auth.admin.handle');
Route::post('/auth/siswa/handle', [AuthSiswaController::class, 'login'])->name('auth.siswa.handle');