<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        /*
        $cur_prefix = Route::getCurrentRoute()->getPrefix();
        $cur_link   = Request::path();

        if ($cur_prefix){
            $cur_link = $this->str_replace_once($cur_prefix, "", $cur_link);
        }
        */
        $cur_link = "";
        view()->share('cur_link', $cur_link);
    }

    public function UpdatePhotos(Request $request, $id){
        $pc = new Admin\PhotosController;
        $pc->UpdatePhotos($request, $id);
    }

    function str_replace_once($search, $replace, $subject)
    {
        $firstChar = strpos($subject, $search);
        if($firstChar !== false)
        {
            $subject = substr_replace($subject, $replace, $firstChar , strlen($search));
        }
        return $subject;

    }
}
