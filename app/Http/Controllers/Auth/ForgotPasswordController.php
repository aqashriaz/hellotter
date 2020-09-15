<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\MailController;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    public function sendemail(Request $request){

        $email=$request->email;
        
        $result = DB::table('users')
        ->select('*')
        ->where('email', $email)
        ->first();
        if($result != null){
          $user_id =$result->id;   
        return view('auth.passwords.newpassword',compact('user_id'));

         }
        else{
       return back()->with('message','Email error');
        }      


    }

   
    public function updatepassword(Request $request){
          
        $confirmpassword=$request->confirmpassword;
        $newpassword=$request->password;
        if($newpassword == $confirmpassword ){
            $id=$request->user_id;

        $password = DB::table('users')
        ->where('id', $id)
        ->update(['password' => bcrypt($newpassword)
                 ]);
         return redirect('/successfullyupdated');

        }
        else{
        return back()->with('message','Confirm Password not matched');;
        }
        

        } 

          }