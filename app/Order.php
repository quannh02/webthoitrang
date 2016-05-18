<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'ord_id';
    protected $fillable = ['customer_id', 'ord_name', 'ord_phone','ord_address', 'ord_condition', 'ord_enddate','ord_total', 'ord_note'];
    public function customer(){
    	return $this->belongsTo('App\Customer');
    }
    public function detailorder(){
    	return $this->hasMany('App\DetailOrder');
    }
}
