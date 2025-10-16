<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;

Route::get('/', [UserController::class, 'index'])->name('user.index.index');

Route::get('/client', [UserController::class, 'index'])->name('user.index.index');

Route::get('/client/bicycles', [UserController::class, 'bicycles'])->name('user.bicycles.bicycles');
Route::get('/client/parts', [UserController::class, 'parts'])->name('user.parts.parts');
Route::get('/client/accessories', [UserController::class, 'accessories'])->name('user.accessories.accessories');
Route::get('/client/cart', [UserController::class, 'cart'])->name('user.cart.cart')->middleware('CheckLoginUser');
Route::get('/client/single/{id}', [UserController::class, 'single'])->name('user.single.single');

Route::get('/client/404', [UserController::class, 'error404'])->name('user.404.404');


?>