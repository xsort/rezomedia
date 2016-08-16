<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Lang;

class Features extends BaseModel
{
    public function values(){
        return $this->hasMany('App\Models\FeaturesValues');
    }

    public function getValuesArrayAttribute(){
        $locale = Lang::locale();
        if ($locale == "ru"){
            $name = "name";
        }else{
            $name = "name_" . $locale;
        }
        return $this->values()->lists($name,'id')->toArray();
    }
}
