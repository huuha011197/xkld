<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dk_tham_gia extends Model
{
    protected $table ="dk_tham_gia";
    protected $fillable = [
     'donhang_id','gioi_tinh','doi_tuoi','trinh_do_hv','yc_kn','yc_khac',
   
];
public function don_hang(){
    return $this->belongsTo('App/don_hang',"donhang_id",'id');
}
}
