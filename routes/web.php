<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArchiveController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BbwscOfficeController;
use App\Http\Controllers\UserController;
use App\Models\BbwscOffice;

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
    //yang paling kanan pada "->name('.....') itu adalah alamat yang ditulis di html jika ingin pindah halaman
    
            //lokasi,                 fungsi           //bungkus, manggilnya di contolle
    // Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');    
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');    
    Route::get('office', [BbwscOfficeController::class, 'index'])->name('admin.office');
    Route::resource('user', UserController::class, ['as' => 'admin']);
    // Route::resource('office', BbwscOfficeController::class, ['as' => 'admin']);
    
    
});

//Route::prefix('user')->middleware('auth')->group(function () {
Route::prefix('user')->group(function () {
    Route::get('dashboard', [ArchiveController::class, 'index'])->name('user.index');
    //yang dibawah sebagai prefix atau awalan link, jadi pake /user/..../....
    Route::resource('archive', ArchiveController::class, ['as' => 'user']);
});

