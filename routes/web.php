<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', [UserController::class, 'index'])->name('user.index');

// Route::get('/user', function () {
//     return view('user.index');  // đường dẫn tới resources/views/user/index.blade.php
// })->name('user.index');
// Các trang khác
Route::get('/bicycles', [UserController::class, 'bicycles'])->name('user.bicycles');
Route::get('/parts', [UserController::class, 'parts'])->name('user.parts');
Route::get('/accessories', [UserController::class, 'accessories'])->name('user.accessories');
Route::get('/cart', [UserController::class, 'cart'])->name('user.cart')->middleware('check.login');
Route::get('/single', [UserController::class, 'single'])->name('user.single');

// Trang 404 (tùy bạn có muốn route không)

Route::get('/404', [UserController::class, 'error404'])->name('user.404');

Route::get('404', [UserController::class, 'error4041'])->name('user.404');


Route::post('/', function (Request $request) {
    $data = $request->only(['title', 'phone', 'email', 'content']);

    // truy vấn insert dữ liệu vào bảng user
    DB::table('user')->insert($data);
    
    return response()->json(['success' => true, 'data' => $data]); // trả JSON về client
})->middleware('validate.user');


// Trang Đăng nhập và đăng ký
Route::get('login', [AuthController::class, 'loginIndex'])->name('auth.login');
Route::post('login', [AuthController::class, 'login'])->name('auth.login.store');

Route::get('register', [AuthController::class, 'registerIndex'])->name('auth.register');
Route::post('register', [AuthController::class, 'register'])->name('auth.register.store');

// Trang đăng xuất
Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');

