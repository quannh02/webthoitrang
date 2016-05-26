<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TinTuc extends Model
{
    protected $table = 'news';
    protected $primaryKey = 'new_id';
    protected $fillable = [
    	'new_name', 
    	'new_images', 
    	'new_detail',
    ];
}
