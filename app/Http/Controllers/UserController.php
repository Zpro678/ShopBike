<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function error4041(Request $request)
    {
        $ip = $request->ip();
        return view('user.404.404', compact('ip'));
    }

    public function index()
    {
        $popular = DB::table('sanpham_hinhanh')
            ->join('sanpham', 'sanpham_hinhanh.MaSP', '=', 'sanpham.MaSP')
            ->select(
                'sanpham_hinhanh.MaHinh',
                'sanpham.MaSP',
                'sanpham.TenSP',
                'sanpham.ModelNo',
                'sanpham.Gia',
                'sanpham.MoTa',
                'sanpham_hinhanh.UrlHinh'
            )
            ->orderByDesc('sanpham.SoLuongTon')
            ->limit(6)
            ->get();

        $newArrivals = DB::table('sanpham_hinhanh')
            ->join('sanpham', 'sanpham_hinhanh.MaSP', '=', 'sanpham.MaSP')
            ->select(
                'sanpham_hinhanh.MaHinh',
                'sanpham.MaSP',
                'sanpham.TenSP',
                'sanpham.ModelNo',
                'sanpham.Gia',
                'sanpham.MoTa',
                'sanpham_hinhanh.UrlHinh'
            )
            ->limit(6)
            ->get();

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

        $data = DB::table('phukien_hinhanh')
            ->join('phukien', 'phukien_hinhanh.MaPK', '=', 'phukien.MaPK')
            ->select(
                'phukien_hinhanh.MaHinh',
                'phukien_hinhanh.MaPK',
                'phukien.TenPK',
                'phukien_hinhanh.UrlHinh',
                'phukien.Gia'
            )
            ->get();

        // if ($data->isEmpty()) {
        //     dd('Không có dữ liệu nào trong bảng phukien_hinhanh!');
        // } else {
        //     dd($data); // hiển thị toàn bộ collection
        // }

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
}
