<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class Room_controller extends Controller
{
    public function add_room()
    {
         return view('backend.layouts.add_room');
    }
     public function manage_room()
     {
          $newroomlist=Room::all();


     return view('backend.layouts.manage_room',compact('newroomlist'));
}

public function roomlist(Request $newroomlist){
     //dd($catagorylist->all());
     Room::Create([
          'catagory_title'=>$newroomlist->catagory_title,
               'max_adult'=>$newroomlist->max_adult,
              'max_child'=>$newroomlist->max_child,
              'room_description'=>$newroomlist->room_description,
              'no_of_bed'=>$newroomlist->no_of_bed,
              'imaje'=>$newroomlist->imaje,
             'price'=>$newroomlist-> price


     ]);
     return redirect()->route('manage_room');
}
}
