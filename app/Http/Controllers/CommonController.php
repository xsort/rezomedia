<?php

namespace App\Http\Controllers;

use App\Models\Features;
use App\Models\Lists;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Content;

use App\Models\Categories;

use App\Models\Products;

use Illuminate\Support\Facades\App;
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
				$products = Categories::find($category->id)->products()->where('enabled', true)->get();
				$features = Features::all();

				return view('products.products')->with('data', $products)->with(compact('category', 'features'));
			}
	    }
	    
	    $product 	= Products::where('slug',$slug)->where('enabled',true)->firstOrFail();

		//additional products for order
		$lists 		= Lists::where('slug', 'additional-products')->first()->children;
		$aproducts 	= [];
		foreach($lists as $l){
			$aproducts[$l->slug] = ['name'=>$l->name, 'value'=>$l->value];
		}

		//getting features
		$features = [];
		foreach($product->features as $feature) {
			if (!isset($feature->getValuesArrayAttribute()[$feature->pivot->value])) continue;
			$name  = $feature->name;
			$value = $feature->getValuesArrayAttribute()[$feature->pivot->value];
			$features[$feature->name][] = $value;
		}

		//getting custom features
		$features_custom_list = Lists::where('slug', 'features-custom')->first()->children;
		$db_features_custom   = unserialize($product->features_custom);
		$features_custom      = [];
		foreach($features_custom_list as $fc){
			$value = "";
			if ($db_features_custom){
				$value = $db_features_custom[$fc['id']];
			}
			if ($value == "") continue;
			$features_custom[] = ['id' => $fc['id'], 'name' => $fc['name'], 'value' => $value];
		}


		return view('products.product')->with('data', $product)->with(compact('aproducts','features','features_custom'));
    }


    public function getContact(){
        return view('contact');
    }

	public function getSearch(Request $request){
		$search   = '%'.$request->search.'%';
		$products = Products::where('name','like',$search)
					->orWhere('name_ro','like',$search)->get();
		return view('products.products')->with('data', $products);
	}

	public function createPDF(){
		$data = ['name' => 'Test', 'email'=>'test', 'text'=>'test'];
		$pdf  = App::make('dompdf.wrapper');
		$pdf->loadView('emails.feedback', $data);
		return $pdf->download('invoice.pdf');
	}
}
