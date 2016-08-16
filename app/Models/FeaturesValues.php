<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeaturesValues extends BaseModel
{
    public $timestamps  =   false;

    public function products(){
        return $this->belongsToMany('App\Models\Products', 'features_products', 'features_id', 'products_id');
    }

}
