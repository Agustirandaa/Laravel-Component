<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\PostingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect(route('login'));
});

Route::prefix('auth')->middleware(['guest'])->group(function () {
    Route::get('/', [AuthController::class, 'index'])->name('login');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/store_register', [AuthController::class, 'store_register'])->name('store_register');

    Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
});


Route::prefix('dashboard')->middleware(['auth'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // Posting
    Route::prefix('posting')->group(function () {
        Route::resource('/', PostingController::class)->names('posting');
    });
});


// Handle CK Editor Upload Image
// Route::post('ckeditor/upload/image', [PostingController::class, 'ckeditorUploadImage'])->name('ckeditor.upload');
