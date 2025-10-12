<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class sanpham_hinhanh extends Model
{
    //
   
    protected $table = 'sanpham_hinhanh';
    public $timestamps = false;
    protected $primaryKey = 'MaHinh';

    protected $fillable = [ 'MaHinh','MaSP','UrlHinh'];
}
