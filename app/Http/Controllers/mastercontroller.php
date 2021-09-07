<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mastercontroller extends Controller
{
    public function master()
    {
         return view('backend.master');
    }
    public function dashboard()
    {
         return view('backend.layouts.home.home');
    }
    public function profilecreate()
    {
         return view('backend.layouts.profile');
    }
   
    
     
    
}
