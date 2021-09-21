<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catagory;
use App\Models\Facility;
use App\Models\Room;

class RoomController extends Controller
{
    public function room()
    {
         $room=Catagory::get()->take(4);
         $facility=Facility::all();
         return view('frontend.layouts.room.room',compact('room','facility'));
    }
    public function single_room($id)
    {
        // dd($id);
        $singleroom=Room::find($id);
        return view('frontend.layouts.room.single_room_view',compact('singleroom'));
    }
    public function all_room()
    {
        $room=Room::paginate(6);
        return view('frontend.layouts.room.allroom',compact('room'));
    }

}