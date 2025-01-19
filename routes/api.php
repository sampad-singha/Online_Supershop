<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', [UserController::class, 'getUser'] )->middleware('auth:sanctum');

Route::apiResource('products', ProductController::class);
