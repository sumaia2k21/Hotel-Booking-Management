<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Catagory;
use App\Models\Room;
use Illuminate\Http\Request;

class Room_controller extends Controller
{
    public function add_room()
    {
         $catagory=Catagory::all();
//     dd($catagory->all());
         return view('backend.layouts.add_room',compact('catagory'));
    }
    

     public function manage_room()
     {
          $newroomlist=Room::paginate(3);


     return view('backend.layouts.manage_room',compact('newroomlist'));
}

public function roomlist(Request $newroomlist){
     // dd($newroomlist->all());
     Room::Create([
          'catagory_id'=>$newroomlist->catagory_title,
          'room_name'=>$newroomlist->room_name,
               'max_adult'=>$newroomlist->max_adult,
              'max_child'=>$newroomlist->max_child,
              'room_description'=>$newroomlist->room_description,
              'no_of_bed'=>$newroomlist->no_of_bed,
              'imaje'=>$newroomlist->imaje,
             'price'=>$newroomlist-> price


     ]);
     return redirect()->route('manage_room');
}
//frontent room page view

     public function room()
     {
          return view('frontend.layouts.room.room');
     }

}
