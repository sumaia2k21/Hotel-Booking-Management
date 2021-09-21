<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\backend\Booking_controller;
use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\Facility;
use App\Models\Hotel;


use Illuminate\Http\Request;

class indexcontroller extends Controller
{
    public function index()
    {
        $hotel=Hotel::all();
        return view('frontend.index');
    }
    public function home()
    {
        
        $facility=Facility::get()->take(3);
        $addroom=Room::with('catagory')->get()->take(1);
    
       
        
        // dd($addroom);
        return view('frontend.layouts.home.home',compact('addroom','facility'));
    }
   
    
   
   
}
