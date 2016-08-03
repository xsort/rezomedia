<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Categories;
use App\Models\Products;
use App\Models\Tags;
use App\Models\Lists;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

		$products = Products::where('enabled',true)->where('top',true)->get();
        $slider   = Lists::where('slug', 'slider')->first()->children;
        $banners  = Lists::where('slug', 'banners')->first()->children;
        $partners = Lists::where('slug', 'partners')->first()->children;
		return view('index')->with(compact('products', 'slider', 'banners', 'partners'));
    }
}
