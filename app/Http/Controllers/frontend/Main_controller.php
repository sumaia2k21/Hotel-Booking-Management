<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Main_controller extends Controller
{
    public function main()
    {
        return view('guest.main');
    }
   
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
    //test
    public function testroom()
    {
        return view('testroom');
    }
}
