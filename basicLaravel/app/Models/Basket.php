<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    public $table="basket";
    public $timestamps=false;

   /* public function getProduct(){
        return $this->belongsToMany('App\Models\Product');
    }*/
}
