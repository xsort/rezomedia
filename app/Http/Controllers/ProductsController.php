<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Products;

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
}
