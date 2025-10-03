<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [UserController::class, 'index'])->name('user.index.index');

Route::get('/client', [UserController::class, 'index'])->name('user.index.index');

// Route::get('/user', function () {
//     return view('user.index');  // đường dẫn tới resources/views/user/index.blade.php
// })->name('user.index');
// Các trang khác
Route::get('/client/bicycles', [UserController::class, 'bicycles'])->name('user.bicycles.bicycles');
Route::get('/client/parts', [UserController::class, 'parts'])->name('user.parts.parts');
Route::get('/client/accessories', [UserController::class, 'accessories'])->name('user.accessories.accessories');
Route::get('/client/cart', [UserController::class, 'cart'])->name('user.cart.cart');
Route::get('/client/single', [UserController::class, 'single'])->name('user.single.single');

// Trang 404 (tùy bạn có muốn route không)

Route::get('/client/404', [UserController::class, 'error404'])->name('user.404.404');

// Route::get('/user/404', [UserController::class, 'error4041'])->name('user.404.404');


// admin
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/users', [AdminController::class, 'users'])->name('admin.users');
    Route::get('/products', [AdminController::class, 'products'])->name('admin.products');
    Route::get('/orders', [AdminController::class, 'orders'])->name('admin.orders');
});

Route::post('/', function (Request $request) {
    $data = $request->only(['title', 'phone', 'email', 'content']);

    // truy vấn insert dữ liệu vào bảng user
    DB::table('user')->insert($data);
    
    return response()->json(['success' => true, 'data' => $data]); // trả JSON về client
})->middleware('validate.user');

