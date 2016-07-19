<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function getLogin(){
        return view('admin.login');
    }

    public function postLogin(Request $request){
        // validate the info, create rules for the inputs
        $rules = array(
            'email'    => 'required|email',         // make sure the email is an actual email
            'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
        );

        $this->validate($request, $rules);

        $userdata = array(
            'email'     => $request->get('email'),
            'password'  => $request->get('password')
        );

        // attempt to do the login
        if (Auth::attempt($userdata)) {
            // authorization successful!
            return redirect('admin');

        } else {
            // validation not successful, send back to form
            return redirect()->back()->withErrors(trans('auth.failed'));
        }

    }
}
