<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function orderdetails(){
        return $this->hasMany('App\OrderDetail');
    }

    
}
