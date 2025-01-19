<?php


use App\Http\Controllers\api\auth\LoginController;
use App\Http\Controllers\api\auth\LogoutController;
use App\Http\Controllers\api\auth\RegistrationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('register', [RegistrationController::class, 'register' ]);
Route::post('login', [LoginController::class, 'login' ]);
Route::post('logout', [LogoutController::class, 'logout' ])->middleware('auth:sanctum');
Route::post('logout-all', [LogoutController::class, 'logoutAll' ])->middleware('auth:sanctum');
