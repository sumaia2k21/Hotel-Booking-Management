<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class indexcontroller extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    public function home()
    {
        $addroom=Room::get()->take(2);
        // dd($addroom);
        return view('frontend.layouts.home.home',compact('addroom'));
    }
    
   
   
}
