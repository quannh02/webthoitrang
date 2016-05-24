<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'c_id';
    protected $fillable = ['c_name'];
    public function product(){
    	return $this->hasMany('App\Product');
    }
}
