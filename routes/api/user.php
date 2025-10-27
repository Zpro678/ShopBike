<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\AuthController;

Route::post('/user/register', [AuthController::class, 'register'])->name('api.user.register');
Route::post('/user/login', [AuthController::class, 'login'])->name('api.user.login');


