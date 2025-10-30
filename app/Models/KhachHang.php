<?php

namespace App\Models;

use App\Casts\HashCast;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class KhachHang extends Model
{
    protected $table = 'khachhang';
    public $timestamps = false;
    protected $primaryKey = 'MaKH';

    protected $fillable = [
        'MaKH',
        'HoTen',
        'Email',
        'MatKhau',
        'SoDienThoai',
        'DiaChi',
        'NgayTao',
        'TrangThai',
    ];

    protected $casts = ['MatKhau' => HashCast::class];

    public static function getAll()
    {
        return self::all();
    }

    public static function getByEmail($email)
    {
        return self::where('Email', '=', $email)->first();
    }

    public static function createKH($data)
    {
        $khachHang = self::create([
            'HoTen' => $data['hoten'],
            'Email' => $data['email'],
            'SoDienThoai' => $data['sdt'],  // Lưu sdt
            'DiaChi' => $data['diachi'],
            'MatKhau' => $data['matkhau'],
            'NgayTao' => now(),
            'TrangThai' => 1,   
        ]);
        return $khachHang;
    }
}
