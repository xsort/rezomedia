<?php

namespace App\Http\Controllers;

use App\Models\Features;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Content;

use App\Models\Categories;

use App\Models\Products;

use App\Models\News;

use View;


class CommonController extends Controller
{
	
	  
	  
    public function getSlug($slug)
    {
	    $content = Content::where('slug',$slug)->where('enabled',true)->first();
	    if (isset($content)) return view('content.content')->with('data', $content);
	    
	    $category = Categories::where('slug',$slug)->where('enabled',true)->first();

	    if (isset($category)) {
		    
		    if ($category->children->count() > 0) {
			    return view('products.categories')->with('data', $category);
			} else {
				$products = Products::where('enabled', true)->get();
				return view('products.products')->with('data', $products)->with('category', $category);
			}
	    }
	    
	    $product 	 = Products::where('slug',$slug)->where('enabled',true)->firstOrFail();
		return view('products.product')->with('data', $product);
    }


        public function getContact()
    {    
        return view('contact');
    }

}
