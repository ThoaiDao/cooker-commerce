<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     //1 sản phẩm thuộc về 1 loại sản phẩm 
     public function product_type(){
        return $this->belongsTo('app\ProductType', 'id_type','id');
    }

    //1 sản phẩm có thể có trong nhiều bill_detail
    public function bill_detail(){
        return $this->hasMany('app\BillDetail','id_product','id');
    }
}
