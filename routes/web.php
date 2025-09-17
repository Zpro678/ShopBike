<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', [UserController::class, 'index'])->name('user.index');

// Route::get('/user', function () {
//     return view('user.index');  // đường dẫn tới resources/views/user/index.blade.php
// })->name('user.index');
// Các trang khác
Route::get('bicycles', [UserController::class, 'bicycles'])->name('user.bicycles');
Route::get('parts', [UserController::class, 'parts'])->name('user.parts');
Route::get('accessories', [UserController::class, 'accessories'])->name('user.accessories');
Route::get('cart', [UserController::class, 'cart'])->name('user.cart');
Route::get('single', [UserController::class, 'single'])->name('user.single');

// Trang 404 (tùy bạn có muốn route không)
Route::get('404', [UserController::class, 'error404'])->name('user.404');
