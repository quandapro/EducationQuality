<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChuongTrinhDaoTao extends Model
{
    protected $table = 'chuongtrinhdaotao';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_CTDT', 'ten_CTDT','id_nguoiKD', 'ngay_kd', 'ngayHetHan_kd', 'thoiHan', 'vanban_kd'
    ];
}
