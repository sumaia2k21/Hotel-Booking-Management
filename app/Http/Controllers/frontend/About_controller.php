<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\backend\Room_controller;
use App\Http\Controllers\Controller;
use App\Models\Catagory;
use App\Models\Facility;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\User;

class About_controller extends Controller
{
    public function about()
    {
        $rooms=Room::count();
        $category=Catagory::count();
        $facilities=Facility::count();
        $user=User::count();
        return view('frontend.layouts.about.about',compact('rooms','category','facilities','user'));
    }
}
