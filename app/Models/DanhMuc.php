<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DanhMuc extends Model
{
    //
    protected $table = "danhmuc";
    public $timestamps = false;
    protected $primaryKey = "MaDanhMuc";

    protected $fillable = ['MaDanhMuc','TenDanhMuc', 'LoaiDanhMuc', 'MoTa'];

    // PHieu
    public  static function getAll(){
        return self::all();
    }

    public static function addDanhMuc($data)
    {
        return self::create([
            'TenDanhMuc'  => $data['ten_danh_muc'],
            'LoaiDanhMuc' => $data['loai_danh_muc'],
            'MoTa'        => $data['mo_ta'] ?? null
        ]);
    }
    
}
