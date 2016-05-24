<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'pro_id';
    protected $fillable = ['c_id', 'p_id', 'pro_name', 'pro_images', 'pro_code', 'pro_price', 'pro_color', 'pro_sizeM', 'pro_sizeL', 'pro_sizeS', 'pro_code'];
    public $timestamps = false;
    public function category(){
    	return $this->belongsTo('App\Category');
    }
    public function detailorder(){
    	return $this->hasMany('App\DetailOrder');
    }
}
