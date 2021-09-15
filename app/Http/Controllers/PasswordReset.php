<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class PasswordReset extends Controller
{
    //

      public function create()
    {

        return view('email');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
          'email' => 'required|email',
         
        ]);

        $data = array('password'=>Str::random(8), 'email'=>$request['email']);
        $user=User::where('email','=',$request['email'])->first();
        if($user!= NULL)
        {
           Mail::send('email-template', $data, function($message) use ($data){
          $message->to($data['email'])->subject('nouveau mots de passe');
        });

           $user->update([
            'password' => Hash::make($data['password']),
        ]);
        return back()->with(['message' => 'Email successfully sent!']);
        }
        else
        {
          return back()->with(['message' => 'Cet email n\'est pas enregistrè ']);
        }
      
    }
}
