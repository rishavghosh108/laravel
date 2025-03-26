<?php

use Illuminate\Support\Facades\Route;

use App\Http\Middleware\CheckPermission;

use App\Http\Controllers\Auth\SignupController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\mainController;
use App\Http\Controllers\manageUserController;
use App\Http\Controllers\managePermissionController;

Route::get('/',[mainController::class, 'get']);
Route::get('home/',[HomeController::class, 'get']);

Route::get('dashboard/', [DashboardController::class, 'get'])->middleware(CheckPermission::class);
Route::get('dashboard/manageuser/', [manageUserController::class, 'get'])->middleware(CheckPermission::class);
Route::post('dashboard/manageuser/', [manageUserController::class, 'addedBy'])->middleware(CheckPermission::class);
Route::get('dashboard/managepermission/', [managePermissionController::class, 'get'])->middleware(CheckPermission::class);
Route::post('dashboard/managepermission/', [managePermissionController::class, 'post'])->middleware(CheckPermission::class);

Route::get('signup/', [SignupController::class, 'get']);
Route::post('signup/', [SignupController::class, 'post']);

Route::get('login/', [LoginController::class,'get']);
Route::post('login/', [LoginController::class,'post']);
Route::post('logout/', [LogoutController::class,'post']);

Route::post('/dashboard/manageuser/user', [manageUserController::class, 'getUser'])->middleware(CheckPermission::class);
Route::post('/dashboard/manageuser/update', [manageUserController::class, 'approveSuspened'])->middleware(CheckPermission::class);