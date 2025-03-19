<?php

use Illuminate\Support\Facades\Route;

use App\Http\Middleware\CheckPermission;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\SignupController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;

Route::get('/',function(){
    return redirect('/dashboard');
});

Route::get('home/',[HomeController::class, 'get']);

Route::get('sample/',function(){
    return "this is a sample api to test middleware";
});

Route::get('dashboard/', [DashboardController::class, 'get'])->middleware(CheckPermission::class);

Route::get('signup/', [SignupController::class, 'get']);
Route::post('signup/', [SignupController::class, 'post']);

Route::get('login/', [LoginController::class,'get']);
Route::post('login/', [LoginController::class,'post']);