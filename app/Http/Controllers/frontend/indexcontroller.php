<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\backend\Booking_controller;
use App\Http\Controllers\Controller;
use App\Models\Catagory;
use App\Models\Room;
use App\Models\Facility;
use App\Models\Gallary;
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
        // $roomimages =Room::with('room')->get()->take(4);
        $addroom =Room::with('room')->get()->take(1);
        $gallary=Gallary::all();
        $roomgallary=Catagory::get()->take(4);
        $category=Catagory::get()->take(4);
        // dd($addroom);
        return view('frontend.layouts.home.home',compact('addroom','facility','gallary','roomgallary','category'));
    }
   
    
   
   
}
