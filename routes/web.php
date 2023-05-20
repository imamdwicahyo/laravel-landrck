<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

;
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

Route::redirect('/', '/login', 301);

Route::get('/login', [AuthController::class, 'index'])->name('auth.login.form');
Route::get('/register', [AuthController::class, 'register'])->name('auth.register.form');
Route::post('/login', [AuthController::class, 'handleLogin'])->name('auth.login.action');
Route::post('/register', [AuthController::class, 'handleRegist'])->name('auth.regist.action');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout.action');

//pengunaaan middleware dibawah, untuk mengakases isi maka harus login dulu (menggunakan auth)
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('user', UserController::class, ['as' => 'admin']);
});

