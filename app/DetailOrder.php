<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailOrder extends Model
{
     protected $table = 'detailoder';
    protected $primaryKey = 'det_id';
    protected $fillable = ['ord_id', 'pro_id', 'det_number','det_price', 'det_size'];
    public function order(){
    	return $this->belongsTo('App\Order');
    }
    public function product(){
    	return $this->belongsTo('App\Product');
    }
}
