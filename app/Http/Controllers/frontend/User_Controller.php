<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class User_Controller extends Controller
{
    public function user_login()
    {
        return view('frontend.layouts.account.user_login');
    }
    public function user_reg()
    {
        return view('frontend.layouts.account.registerform');
    }
    public function viewprofile()
    {
        return view('frontend.layouts.account.viewprofile');
    }
    public function signupform()
    {
       
        return view('frontend.layouts.account.signup');
    }
    public function signupformpost(Request $request)
    {
        //  dd($request->all());
        User::Create([
            'name'=>$request->guest_name,
            'mobile'=>$request->guest_mobile_no,
            'email'=>$request->guest_email,
            'role'=>'customer',
            'password'=>bcrypt($request->guest_password)
           
        ]);
        return redirect()->back()->with('success','user registration successfull');
    }
    
}
