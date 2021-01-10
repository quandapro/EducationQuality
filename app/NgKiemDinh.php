<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NgKiemDinh extends Model
{
    protected $table = 'nguoikd';
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_user', 'full_name','ngaySinh', 'queQuan', 'id_DVKD'
    ];
}
