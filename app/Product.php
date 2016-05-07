<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'pro_id';
    protected $fillable = ['c_id', 'p_id', 'pro_name', 'pro_images', 'pro_price', 'pro_number', 'pro_color', 'pro_size'];
}
