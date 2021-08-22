<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Reg_user_controller extends Controller
{
    public function about_us()
    {
         return view('backend.layouts.manage_catagory');
    }
    
    public function contact_us()
    {
         return view('backend.layouts.manage_catagory');
    }
}
