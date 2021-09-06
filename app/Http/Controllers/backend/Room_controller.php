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
          $newroomlist=Room::with('catagory')->paginate(6);



     return view('backend.layouts.manage_room',compact('newroomlist'));
}

public function roomlist(Request $newroomlist){
     
     // dd($newroomlist->all());
     // dd(date('Ymdhms').'.'.$newroomlist->file('imaje')->getClientOriginalExtension());
     $fileName='';
     if($newroomlist->hasFile('imaje'))
     {

          $file=$newroomlist->file('imaje');
          // dd($file);
          //generate file name
          $fileName=date('Ymdhms').'.'.$file->getClientOriginalExtension();
          $file->storeAs('/uploads',$fileName);
     }

     Room::Create([
          'catagory_id'=>$newroomlist->catagory_title,
          'room_name'=>$newroomlist->room_name,
          'room_number'=>$newroomlist->room_number,
          'max_adult'=>$newroomlist->max_adult,
          'max_child'=>$newroomlist->max_child,
          'room_description'=>$newroomlist->room_description,
          'no_of_bed'=>$newroomlist->no_of_bed,
          'imaje'=>$fileName,
          
          'price'=>$newroomlist-> price
             

     ]);
     return redirect()->route('manage_room');
}
//frontent room page view

     public function room()
     {
          $room=Catagory::get()->take(4);
          return view('frontend.layouts.room.room',compact('room'));
     }
     
     public function catagory_under_room($id)
    {
     $catagory_room_view=Room::with('catagory')->get()->take(4);
     //  dd($catagory_room_view);
       $catagory_room=Room::where('catagory_id',$id)->get(); 
         return view('frontend.layouts.room.catagory_under_room',compact('catagory_room','catagory_room_view'));
    }
    

}
