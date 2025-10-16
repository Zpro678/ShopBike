<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\DanhMucController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;



// Admin
// Route login - KHÔNG cần middleware
Route::prefix('/manager')->name('admin.')->group(function () {
    Route::get('/login', [AdminController::class, 'loginIndex'])->name('login');
    Route::post('/login', [AdminController::class, 'login'])->name('login.store');
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
});

Route::prefix('/manager')->name('admin.')->middleware('CheckLoginAdmin')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::get('/blank', [AdminController::class, 'blank'])->name('blank');

    Route::get('/buttons', [AdminController::class, 'buttons'])->name('buttons');

    Route::get('/flot', [AdminController::class, 'flot'])->name('flot');

    Route::get('/forms', [AdminController::class, 'forms'])->name('forms');

    Route::get('/addproducts', [AdminController::class, 'addproducts'])->name('addproducts');

    Route::post('/addproducts', [SanPhamController::class, 'store'])->name('addproducts');

    Route::post('/addCategories', [DanhMucController::class, 'AddDanhMuc'])->name('addCategories');

    Route::get('/grid', [AdminController::class, 'grid'])->name('grid');

    Route::get('/icons', [AdminController::class, 'icons'])->name('icons');

    Route::get('/morris', [AdminController::class, 'morris'])->name('morris');

    Route::get('/notifications', [AdminController::class, 'notifications'])->name('notifications');

    Route::get('/panels', [AdminController::class, 'panels_wells'])->name('panels_wells');

    Route::get('/tables', [AdminController::class, 'tables'])->name('tables');

    Route::get('/typography', [AdminController::class, 'typography'])->name('typography');

    // Route::get('/users', [AdminController::class, 'users'])->name('users');
    // Route::get('/products', [AdminController::class, 'products'])->name('products');
    // Route::get('/orders', [AdminController::class, 'orders'])->name('orders');
});

?>