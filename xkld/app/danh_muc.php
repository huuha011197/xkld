<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class danh_muc extends Model
{
    protected $table ="danh_muc";
    protected $fillable = [
    'name'
];
public function danh_muc(){
    return $this->hasMany('App/don_hang',"danhmuc_id",'id');
}
}
