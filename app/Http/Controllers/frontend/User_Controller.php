<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Facility;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;


class User_Controller extends Controller
{
   
    public function viewprofile()
    {
        $profile=Auth::user();
        // $facility=Facility::get()->take(3);
        return view('frontend.layouts.account.viewprofile',compact('profile'));
    }
    public function signupform()
    {
       
        return view('frontend.layouts.account.signup');
    }
    public function signupformpost(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'guest_name'=> 'required',
            'guest_email'=> 'required|email|unique:users,email',
            'guest_password'=> 'required|min:6',
            'guest_mobile_no'=> 'required',
            'guest_mobile_no'=> 'required',
            
            

        ]);
       
        User::Create([
            'name'=>$request->guest_name,
            'mobile'=>$request->guest_mobile_no,
            'email'=>$request->guest_email,
            'role'=>'customer',
            'password'=>bcrypt($request->guest_password),
            
           
        ]);
        return redirect()->back()->with('success','user registration successfull');
    }
//login here
    public function userlogin()
    {
       
        return view('frontend.layouts.account.signup');
    }

    public function dologin(Request $request)
    {
        $credentials=$request->except('_token');
    
        // dd($request->all());
    //   dd( $credentials);
      if(Auth::attempt( $credentials))
      {

             return redirect()->route('home');
        }
         return redirect()->back()->with('message','invalid user info');
        
    }

    public function guestlogout()
    {
        session()->forget('cart');
        Auth::logout();
        return redirect()->route('home');
    }
    
    
}
