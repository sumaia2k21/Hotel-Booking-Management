<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Booking_controller extends Controller
{
    public function new_booking()
    {
         return view('backend.layouts.new_booking');
    }
    public function all_booking()
    {
         return view('backend.layouts.all_booking');
    }
}
