<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class indexcontroller extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    public function home()
    {
        return view('frontend.layouts.home.home');
    }
    
   
   
}
