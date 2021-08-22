<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Facilities_controller extends Controller
{
    public function add_facilities()
    {
         return view('backend.layouts.add_facilities');
    }
    public function manage_facilities()
    {
         return view('backend.layouts.manage_facilities');
    }
    
    
}
