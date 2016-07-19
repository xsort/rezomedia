<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    /**
     * Many to Many relation
     */
    public function news()
    {
        return $this->belongsToMany('App\Models\News');
    }
}
