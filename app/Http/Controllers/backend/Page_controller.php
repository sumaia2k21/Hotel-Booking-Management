<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Page_controller extends Controller
{
    public function about_us()
    {
         return view('backend.layouts.about_us');
    }
    public function contact_us()
    {
         return view('backend.layouts.contact_us');
    }
    
   
}
