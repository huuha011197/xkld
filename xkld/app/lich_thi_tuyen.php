<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lich_thi_tuyen extends Model
{
    protected $table ="lich_thi_tuyen";
    protected $fillable = [
        'donhang_id','ngay_thi','lich_bay',
];
public function don_hang(){
    return $this->belongsTo('App/don_hang',"donhang_id",'id');
}
}
