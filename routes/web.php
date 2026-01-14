<?php

use App\Http\Controllers\AuthAdminController;
use App\Http\Controllers\AuthSiswaController;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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
    if (Auth::check()) {
        return redirect('/dashboard/admin');
    }
    if (Session::has('siswa')) {
        return redirect('/dashboard/siswa');
    }

    return redirect('/auth/siswa');
});

// Login Admin
Route::get('/auth/admin', [AuthAdminController::class, 'index'])->name('auth.admin');
Route::post('/auth/admin/login', [AuthAdminController::class, 'login'])->name('auth.admin.login');

// Login Siswa
Route::get('/auth/siswa', [AuthSiswaController::class, 'index'])->name('auth.siswa');
Route::post('/auth/siswa/login', [AuthSiswaController::class, 'login'])->name('auth.siswa.login');