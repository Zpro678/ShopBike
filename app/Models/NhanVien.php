<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class NhanVien extends Authenticatable
{
    protected $table = 'nhanvien';
    public $timestamps = false;
    protected $primaryKey = 'MaNV';

    protected $fillable = [
        'MaNV',
        'HoTen',
        'Email',
        'MatKhau',
        'SoDienThoai',
        'VaiTro',
        'NgayTao',
        'TrangThai',
    ];

    public static function getAll()
    {
        return self::all();
    }

    public static function getByEmail($email)
    {
        return self::where('Email', '=', $email)->first();
    }
}
