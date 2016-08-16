<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeaturesProducts extends Model
{
    public function products(){
        return $this->hasMany('App\Models\Products','id','products_id');
    }
}
