<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $guarded = [];

    public function product(){
        return $this->belongsToMany('App\Product','client_product','client_id','product_id')->withTimestamps();
    }
    public function input(){
        return $this->hasMany('App\Input','client_id','id');
    }
}
