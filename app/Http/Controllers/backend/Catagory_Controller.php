<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Catagory_Controller extends Controller
{
    public function add_catagory()
    {
         return view('backend.layouts.add_catagory');
    }
    public function manage_catagory()
    {
         return view('backend.layouts.manage_catagory');
    }
}
