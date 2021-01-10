<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonViKiemDinh extends Model
{
    protected $table = 'donvikiemdinh';
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tenDonVi' 
    ];
}
