<?php

use App\Http\Controllers\Api\TokenController;
use Illuminate\Support\Facades\Route;

Route::get('/ping', function () {
    return response()->json(['message' => 'pong'], 200);
});

Route::prefix('v1')->group(function(){
    Route::post('/login', [TokenController::class, 'login'])->name('auth.store');
});
