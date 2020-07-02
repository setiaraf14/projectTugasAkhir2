<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function input(){
        return $this->hasMany(Input::class, 'product_id', 'id');
    }
}
