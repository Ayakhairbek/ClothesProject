<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Mail;

class ContactController extends Controller

    {
        public function showcontact(){
         
            return view('user.contactus');
        }
        
        public function send(Request $request){
            $name=$request->name;
            $email=$request->email;
            $message=$request->message;
             Mail::to("ss@ss.com")
        ->send(new ContactMail($name,$email,$message));
        return redirect()->back();
         }
        
    }