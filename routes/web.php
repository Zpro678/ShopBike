<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\DanhMucController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use Yajra\DataTables\Facades\DataTables;

// Route::get('/', function () {
//     return view('welcome');
// });



//ajax
Route::get('/api/products', [AdminController::class, 'getProducts'])->name('api.products');
Route::get('/api/categories', [AdminController::class, 'getDanhMuc'])->name('api.categories');

// Trang Đăng nhập và đăng ký
Route::get('login', [AuthController::class, 'loginIndex'])->name('auth.login');
Route::post('login', [AuthController::class, 'login'])->name('auth.login.store');

Route::get('register', [AuthController::class, 'registerIndex'])->name('auth.register');
Route::post('register', [AuthController::class, 'register'])->name('auth.register.store');

// Trang đăng xuất
Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');


// test
Route::get('/user/single', function () {
    return 'Route user.single chưa được định nghĩa';
})->name('user.single');
