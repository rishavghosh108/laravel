<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\SignupController;
use App\Http\Controllers\DashboardController;

Route::get('dashboard', [DashboardController::class, 'get'])->name('dashboard');

Route::get('signup/', [SignupController::class, 'get']);
Route::post('signup/', [SignupController::class, 'post'])->name('signup');

Route::get('login/', [LoginController::class,'get']);
Route::post('login/', [LoginController::class,'post']);