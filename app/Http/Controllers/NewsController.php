<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Tags;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Products;

class NewsController extends Controller
{

        public function getNewsList()
    {    
        return view('news.newslist');
    }

        public function getNews()
    {    
        return view('news.show');
    }
}
