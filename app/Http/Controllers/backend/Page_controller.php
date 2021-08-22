<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Page_controller extends Controller
{
    public function about_us()
    {
         return view('backend.layouts.manage_catagory');
    }
    public function contact_us()
    {
         return view('backend.layouts.contact_us');
    }
    
    public function read_enquiry()
    {
         return view('backend.layouts.read_enquiry');
    }
}
