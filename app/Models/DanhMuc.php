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
}
