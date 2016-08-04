<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends BaseModel
{
	public function parents() {
	    return $this->belongsToMany('App\Models\Categories', 'products_categories',  'products_id', 'categories_id');
    }

	public function contacts(){
		return $this->belongsToMany('App\Models\Contacts', 'products_contacts', 'product_id', 'contact_id')->withPivot(['name','name_ro','name_en']);
	}

	public function features(){
		return $this->belongsToMany('App\Models\Features')->withPivot(['value']);
	}

	public function recommended() {
		return $this->belongsToMany('App\Models\Products', 'recommended_xref', 'product_id', 'recommended_id');
	}

}
