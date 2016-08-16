<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\FeaturesValues;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\App;

class ProductsController extends Controller
{


        public function getCard()
    {
        return view('products.product-card');
    }

        public function getProduct()
    {
        return view('products.product');
    }

        public function getLetter()
    {
        return view('letter.letter');
    }

            public function getLetterOld()
    {
        return view('letter.letter-old');
    }

    public function getLetterPDF(){
        $pdf  = App::make('dompdf.wrapper');
        $pdf->loadView('letter.letter');
        return $pdf->stream('invoice.pdf');
        
    }

        public function getProductlist()
    {
        return view('products.products');
    }

        public function getProductWishlist()
    {
        return view('products.product-wishlist');
    }

        public function getCheckout()
    {
        return view('products.product-checkout');
    }

    public function getFilterJson(Request $request){
        $filter         = json_decode($request->filter);
        $category_id    = $request->category_id;

        $data     = [];
        if(count($filter) == 0){
            $products = Categories::find($category_id)->products()->where('enabled', true)->get();
            foreach($products as $p) {
                $data = $this->setData($p, $data);
            }
        }else{
            $features = FeaturesValues::whereIn('id', $filter)->get();
            foreach($features as $f){
                $products = $f->products()->where('enabled', true)->wherePivot('value','=', $f->id)->get();
                foreach($products as $p) {
                    $data = $this->setData($p, $data);
                }
            }
        }

        return response()->json(['success' => 'true', 'data' => $data]);
    }

    function setData($p, $data){
        $data[] = [
            'photo'            => $p->photos{0}->source,
            'link'             => route('get_slug', $p->slug),
            'price'            => $p->price,
            'price_discount'   => $p->price_discount,
            'name'             => $p->name
        ];
        return $data;
    }
}
