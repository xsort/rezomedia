<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    private $from_mail;
    private $from_name;
    private $to_mail;
    private $to_name;

    public function __construct(){
        $this->from_mail = config('mail.from.address');
        $this->from_name = config('mail.from.name');
        $this->to_mail   = config('mail.to.address');
        $this->to_name   = config('mail.to.name');
    }


    public function sendFeedback(Request $request){
        Mail::send('emails.feedback', ['name' => $request->name, 'email'=>$request->email, 'text'=>$request->message], function ($m) {
            $m->from($this->from_mail, $this->from_name)
              ->to($this->to_mail,   $this->to_name)
              ->subject('Сообщение с сайта ');
        });
    }

}
