<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TieuChiCSGD extends Model
{
    //
    protected $table = 'tieuchi_csgd';
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_CSGD', 'tieuChuan1','tieuChi1_1', 'tieuChi1_2', 'tieuChuan2','tieuChi2_1', 'tieuChi2_2', 'tieuChi2_3', 'tieuChi2_4', 'tieuChi2_5', 'tieuChi2_6', 'tieuChi2_7', 'tieuChuan3','tieuChi3_1', 'tieuChi3_2', 'tieuChi3_3', 'tieuChi3_4', 'tieuChi3_5', 'tieuChi3_6', 'tieuChuan4','tieuChi4_1', 'tieuChi4_2', 'tieuChi4_3', 'tieuChi4_4', 'tieuChi4_5', 'tieuChi4_6', 'tieuChi4_7', 'tieuChuan5','tieuChi5_1', 'tieuChi5_2', 'tieuChi5_3', 'tieuChi5_4', 'tieuChi5_5', 'tieuChi5_6', 'tieuChi5_7', 'tieuChi5_8', 'tieuChuan6','tieuChi6_1', 'tieuChi6_2', 'tieuChi6_3', 'tieuChi6_4', 'tieuChi6_5', 'tieuChi6_6', 'tieuChi6_7', 'tieuChi6_8', 'tieuChi6_9', 'tieuChuan7','tieuChi7_1', 'tieuChi7_2', 'tieuChi7_3', 'tieuChi7_4', 'tieuChi7_5', 'tieuChi7_6', 'tieuChi7_7', 'tieuChuan8','tieuChi8_1', 'tieuChi8_2', 'tieuChi8_3', 'tieuChuan9','tieuChi9_1', 'tieuChi9_2', 'tieuChi9_3', 'tieuChi9_4', 'tieuChi9_5', 'tieuChi9_6', 'tieuChi9_7', 'tieuChi9_8', 'tieuChi9_9', 'tieuChuan10','tieuChi10_1', 'tieuChi10_2', 'tieuChi10_3'
    ];
}

