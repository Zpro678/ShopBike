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

Route::get('/', [UserController::class, 'index'])->name('user.index.index');

Route::get('/client', [UserController::class, 'index'])->name('user.index.index');

// Route::get('/user', function () {
//     return view('user.index');  // đường dẫn tới resources/views/user/index.blade.php
// })->name('user.index');
// Các trang khác

Route::get('/client/bicycles', [UserController::class, 'bicycles'])->name('user.bicycles.bicycles');
Route::get('/client/parts', [UserController::class, 'parts'])->name('user.parts.parts');
Route::get('/client/accessories', [UserController::class, 'accessories'])->name('user.accessories.accessories');
Route::get('/client/cart', [UserController::class, 'cart'])->name('user.cart.cart')->middleware('CheckLoginUser');
Route::get('/client/single/{id}', [UserController::class, 'single'])->name('user.single.single');



// Trang 404 (tùy bạn có muốn route không)

Route::get('/client/404', [UserController::class, 'error404'])->name('user.404.404');


// Route::get('/user/404', [UserController::class, 'error4041'])->name('user.404.404');

// Admin
// Route login - KHÔNG cần middleware
Route::prefix('/manager')->name('admin.')->group(function () {
    Route::get('/login', [AdminController::class, 'loginIndex'])->name('login');
    Route::post('/login', [AdminController::class, 'login'])->name('login.store');
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
});

// Route bảo vệ - Áp dụng middleware cho group này
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

    Route::get('/login', [AdminController::class, 'login'])->name('login');

    Route::get('/morris', [AdminController::class, 'morris'])->name('morris');

    Route::get('/notifications', [AdminController::class, 'notifications'])->name('notifications');

    Route::get('/panels', [AdminController::class, 'panels_wells'])->name('panels_wells');

    Route::get('/tables', [AdminController::class, 'tables'])->name('tables');

    Route::get('/typography', [AdminController::class, 'typography'])->name('typography');

    // Route::get('/users', [AdminController::class, 'users'])->name('users');
    // Route::get('/products', [AdminController::class, 'products'])->name('products');
    // Route::get('/orders', [AdminController::class, 'orders'])->name('orders');
});

//ajax
Route::get('/api/products', [AdminController::class, 'getProducts'])->name('api.products');
Route::get('/api/categories', [AdminController::class, 'getDanhMuc'])->name('api.categories');
// Route::post('/', function (Request $request) {
//     $data = $request->only(['title', 'phone', 'email', 'content']);

//     // truy vấn insert dữ liệu vào bảng user
//     DB::table('user')->insert($data);

//     return response()->json(['success' => true, 'data' => $data]); // trả JSON về client
// })->middleware('validate.user');


// Route::get('/client/parts',function(){
//     $data=DB::select('Select * from phukien');
//     return view('user.parts.parts',['data'=>$data]);
// });


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
