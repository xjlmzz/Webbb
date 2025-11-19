<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('Welcome');
});

Route::get('/register',[AuthController::class, 'showRegister'])->name('register.form');
Route::post('/register',[AuthController::class, 'register'])->name('register');

Route::get('/login',[AuthController::class, 'showLogin'])->name('login.form');
Route::post('/login',[AuthController::class, 'PerformLogin'])->name('login');

Route::get('/logout', function () {

});