<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoSoGiaoDuc extends Model
{
    protected $table = 'cosogiaoduc';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_CSGD', 'ten_CSGD','id_nguoiKD', 'ngay_kd', 'ngayHetHan_kd', 'thoiHan', 'vanban_kd'
    ];
}
