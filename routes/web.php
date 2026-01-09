<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HabitController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index'])->name('index');

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('auth.login');
    Route::get('/cadastro', [RegisterController::class, 'index'])->name('register');
    Route::post('/cadastro', [RegisterController::class, 'store'])->name('auth.register');
});

// AUTH
Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('auth.logout');

    // HABITS
    Route::resource('/dashboard/habits', HabitController::class)->except('show');
    Route::get('/dashboard/habits/historico/{year?}', [HabitController::class, 'history'])->name('habits.history');
    Route::get('/dashboard/habits/configurar', [HabitController::class, 'settings'])->name('habits.settings');
    Route::post('/dashboard/habits/{habit}/toggle', [HabitController::class, 'toggle'])->name('habits.toggle');
});
