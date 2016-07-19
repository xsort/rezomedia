<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends BaseModel
{
    /**
     * Many to Many relation
     */
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tags');
    }

    public function getTagsIdsArray(){
        return $this->tags->pluck('id')->toArray();
    }


}
