<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Features extends Model
{
    public function values(){
        return $this->hasMany('App\Models\FeaturesValues');
    }

    public function getValuesArrayAttribute(){
        return $this->values()->lists('name','id')->toArray();
    }
}
