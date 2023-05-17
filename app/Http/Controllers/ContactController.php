<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $req){
        //validation form
        $data=[
            'name'=>$req->name,
            'email'=>$req->email,
            'message'=>$req->message,
        ];
        Mail::to('receiver@gmail.com')->send(new ContactMail($data));
        return 'Email Sent! Thanks for reaching out!';
    }
}
