<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = 'bill';

    //1 bill sẽ có nhiều billdetail
    public function bill_detail(){
        return $this->hasMany('app\BillDetail','id_bill','id');
    }

    //1 bill chỉ thuộc về 1 customer
    public function customer(){
        return $this->belongsTo('app\Customer','id_customer','id');
    }
}
