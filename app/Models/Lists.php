<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lists extends BaseModel
{
    public function children() {
        return $this->hasMany('App\Models\Lists', 'parent_id');
    }
}
