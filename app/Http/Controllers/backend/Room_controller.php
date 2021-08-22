<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Room_controller extends Controller
{
    public function add_room()
    {
         return view('backend.layouts.add_room');
    }
    public function manage_room()
    {
         return view('backend.layouts.manage_room');
    }
}
