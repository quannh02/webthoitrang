<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $primaryKey = 'cus_id';
    protected $fillable = ['name', 'email', 'address','sodienthoai'];
    public function order(){
    	return $this->hasMany('App\Order');
    }

}
