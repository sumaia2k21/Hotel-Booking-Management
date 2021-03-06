<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Catagory;
use App\Models\Facility;
use App\Models\Roomamenities;
use App\Models\Room;
use Illuminate\Http\Request;

class Room_controller extends Controller
{
    public function add_room()
    {

         $catagory=Catagory::all();
         $amenities=Facility::all();
          return view('backend.layouts.newroom.add_room',compact('catagory','amenities'));
    }
    

     public function manage_room()
     {
          $newroomlist=Room::with('catagory','roomamenities')->paginate(6);
          // $amenities = Roomamenities::with('roomamenities')->paginate(8);
           return view('backend.layouts.newroom.manage_room',compact('newroomlist'));
          }




public function roomlist(Request $newroomlist){

     $newroomlist->validate([
          'room_number'=> 'required',
          'room_number'=> 'required|unique:rooms',   

      ]);
   
     $discount=Catagory::find($newroomlist->catagory_title);
     //dd($discount);
     
          $fileName='';
          if($newroomlist->hasFile('image'))
          {

               $file=$newroomlist->file('image');
               // dd($file);
               //generate file name
               $fileName=date('Ymdhms').'.'.$file->getClientOriginalExtension();
               $file->storeAs('/uploads',$fileName);
          }

           $room = Room::Create([
               'catagory_id'=>$newroomlist->catagory_title,
               'room_name'=>$newroomlist->room_name,
               'room_number'=>$newroomlist->room_number,
               'max_adult'=>$newroomlist->max_adult,
               'max_child'=>$newroomlist->max_child,
               'room_description'=>$newroomlist->room_description,
               'no_of_bed'=>$newroomlist->no_of_bed,
               'image'=>$fileName,
               'price'=>$newroomlist->price ,
               // 'discount'=>$discount->discount,
               'discount_price'=>$newroomlist-> price-$discount->discount/100*$newroomlist->price ,
               // 'status'=>$newroomlist-> status
               

           ]);
         

          foreach($newroomlist->facilities_id as $am)
               {
          
               Roomamenities::create([
               'room_id'=>$room->id,
               'facilities_id'=>$am
               ]);

               }
          return redirect()->route('manage_room');
     }
     //delete here
     public function delete($id)
     {
          // dd($id);
          // Room::destroy($id);
          $room=Room::find($id);
          if($room)
          {
               $room->delete();
               return redirect()->back()->with('message','delete successfully' );
          }
          return redirect()->back()->with('message','no room found' );
     }

     public function edit($id)
     {
          $catagory=Catagory::all();
     // dd($catagory);
          $room=Room::find($id);
          return view('backend.layouts.newroom.edit',compact('catagory','room'));
     }
     public function update(Request $newroomlist,$id)
     {
          $discount=Catagory::find($newroomlist->catagory_title);
          
          $room=Room::find($id);
          $room->update([
               'room_name'=>$newroomlist->room_name,
               'room_number'=>$newroomlist->room_number,
               'max_adult'=>$newroomlist->max_adult,
               'max_child'=>$newroomlist->max_child,
               'room_description'=>$newroomlist->room_description,
               'no_of_bed'=>$newroomlist->no_of_bed,
               'price'=>$newroomlist->price,
               'discount'=>$newroomlist->discount,
               'discount_price'=>$newroomlist-> price-$newroomlist->discount/100*$newroomlist->price ,
               'status'=>$newroomlist-> status 

          ]);

       return redirect()->route('manage_room')->with('message','Room update sucessfully');  
          
       

     }


 
    



//frontent room page view

     // public function room()
     // {
     //      $room=Catagory::get()->take(4);
     //      $facility=Facility::all();
     //      return view('frontend.layouts.room.room',compact('room','facility'));
     // }
     

    

}
