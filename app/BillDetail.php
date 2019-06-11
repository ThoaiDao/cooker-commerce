<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    protected $table = 'bill_detail';

    //1 sản phẩm chỉ thuộc trong 1 billDetail 
    public function product(){
        return $this->belongsTo('app\Product','id_product','id');
    }

    //1 bill_detail thuộc về 1 bill
    public function bill(){
        return $this->belongsTo('app\Bill','id_bill','id');
        
    }
}
