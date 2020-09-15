<?php

namespace App\Http\Controllers;

 use App\Mail\SignupEmail;
 use App\Mail\ForgetpwdEmail;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public static function sendSignupEmail($name, $email, $verification_code){
        $data = [
            'name' => $name,
            'verification_code' => $verification_code
        ];
 
        Mail::to($email)->send(new SignupEmail($data));
        
    }


    public static function sendforgetpwdEmail($id, $email){
        $data = [
            'id' => $email,
            'email' => $id
        ];
      
        Mail::to($id)->send(new ForgetpwdEmail($data));
        
    }


    
}