<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

// SITE
Route::get('/', [SiteController::class, 'index']);

// LOGIN
Route::get('/login', [LoginController::class, 'index']);
