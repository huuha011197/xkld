<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class don_hang extends Model
{
    protected $table ="don_hang";
    protected $fillable = [
    'name', 'danhmuc_id','so_luong','cong_viec','thoi_gian_hd','dia_diem_lv','muc_luong','quyen_loi',
];
public function don_hang(){
    return $this->belongsTo('App/danh_muc',"danhmuc_id",'id');
}
public function lich_thi_tuyen(){
    return $this->hasMany('App/lich_thi_tuyen',"donhang_id",'id');
}
}
