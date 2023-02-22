<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\MeController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () =>  'ok');

Route::post('/register', RegisterController::class);

Route::post('/login', LoginController::class);

Route::middleware('auth:sanctum')->group(function(){
    Route::get('/me', MeController::class);
    Route::post('/logout', LogoutController::class);
});