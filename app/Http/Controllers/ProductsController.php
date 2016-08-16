<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\FeaturesProducts;
use App\Models\FeaturesValues;
use App\Models\Orders;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;

class ProductsController extends Controller
{
    private $filepath;

        public function getCard()
    {
        return view('products.product-card');
    }

        public function getProduct()
    {
        return view('products.product');
    }

    public function createPDF(Request $request){

        //creating new order
        $order              = new Orders();
        $order->phone       = $request->tel;
        $order->fiscal      = $request->fisc;
        $order->company     = $request->firm;
        $order->name        = $request->name;
        $order->address     = $request->adres;
        $order->comments    = $request->comm;
        $order->save();

        $order_number = sprintf("%08d", $order->id);

        //getting products
        $product_names = $request->product_names;
        $quantities    = $request->quantities;
        $amounts       = $request->amounts;
        $products      = [];
        $amount        = 0;
        foreach($product_names as $i=>$name){
            if ($i == 3 && !isset($request->cashier)) continue; //remove cashier if unchecked
            if ($i == 4 && !isset($request->exploit)) continue; //remove exproit if unchecked
            $products[] = ['name'     => $name,
                         'quantity' => $quantities[$i],
                         'price'    => $amounts[$i] / $quantities[$i],
                         'amount'   => $amounts[$i]];
            $amount += $amounts[$i];
        }

        //data for PDF
        $data = ['organization' => $order->company,
                 'order_number' => $order_number,
                 'products'     => $products,
                 'amount'       => $amount];

        //DOMPDF init
        $pdf  = App::make('dompdf.wrapper');
        //render pdf view
        $pdf->loadView('letter.letter', $data);
        //save to the file
        $this->filepath = base_path() . "/public/pdf/" . $order_number . ".pdf";
        $pdf->save($this->filepath);

        //sending email to administrator
        Mail::send('emails.invoice', ['order' => $order], function ($m) {
            $m->from(config('mail.from.address'), config('mail.from.name'))
                ->to(config('mail.to.address'), config('mail.to.name'))
                ->subject('Счет на оплату')
                ->attach($this->filepath)
            ;
        });

        //DOMPDF one more for streaming
        $pdf  = App::make('dompdf.wrapper');
        $pdf->loadView('letter.letter', $data);
        return $pdf->stream();
        
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
            $features_products = FeaturesProducts::whereIn('value', $filter)->get();
            foreach($features_products as $fp) {
                $products = $fp->products()->where('enabled', true)->get();
                foreach ($products as $p) {
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
