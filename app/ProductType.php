<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $table = 'type_products';

    //1 loại sản phẩm thì có nhiều sản phẩm
    public function product(){
        return $this->hasMany('app\Product','id_type', 'id');
    }
}
