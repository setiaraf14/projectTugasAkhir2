<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function input(){
        return $this->hasMany(Input::class, 'product_id', 'id');
    }

    public function client(){
        return $this->belongsToMany('App\Client','client_product','product_id','client_id')->withTimestamps();
    }
}
