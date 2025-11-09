<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Models\SanPham;
use App\Models\PhuKien;

class UserController extends Controller
{

    public function error4041(Request $request)
    {
        $ip = $request->ip();
        return view('user.404.404', compact('ip'));
    }

    // PHieu da sua
    public function index()
    {
        $popular = SanPham::getPopular();
        $newArrivals = SanPham::getNewArrivals();

        return view('user.index.index', [
            'popular' => $popular,
            'newArrivals' => $newArrivals
        ]);
    }

    public function bicycles()
    {
        return view('user.bicycles.bicycles');
    }

    public function parts()
    {
        $data = PhuKien::getAll();

        return view('user.parts.parts', ['data' => $data]);
    }

    public function accessories()
    {
        return view('user.accessories.accessories');
    }

    public function cart()
    {
        return view('user.cart.cart');
    }

    public function single($id)
    {
        $product = null; //DB::table('sanpham')->where('MaSP', (int)$id)->first();
        return view('user.single.single', ['product' => $product]);
    }

    public function error404()
    {
        return view('user.404.404');
    }

    public function error403()
    {
        return view('user.403.403');
    }
}
