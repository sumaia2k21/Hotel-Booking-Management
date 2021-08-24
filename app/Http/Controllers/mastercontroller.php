<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mastercontroller extends Controller
{
    public function master()
    {
         return view('backend.master');
    }
    public function home()
    {
         return view('backend.layouts.home');
    }
    public function profilecreate()
    {
         return view('backend.layouts.profile');
    }
    public function login()
    {
         return view('backend.layouts.login');
    }
}
