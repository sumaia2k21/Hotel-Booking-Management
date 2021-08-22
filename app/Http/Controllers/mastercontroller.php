<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mastercontroller extends Controller
{
    public function master()
    {
         return view('master');
    }
    public function home()
    {
         return view('backend.layouts.home');
    }
}
