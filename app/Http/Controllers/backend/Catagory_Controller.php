<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catagory;
use App\Models\Room;

class Catagory_Controller extends Controller
{
     
    public function add_catagory()
    {
         return view('backend.layouts.catagory.add_catagory');
    }

    public function manage_catagory( )
    {
         $catagorylist=Catagory::paginate(8);
     

         return view('backend.layouts.catagory.manage_catagory',compact('catagorylist'));
    }
    

public function catagory_list(Request $catagorylist){
     $fileName='';
     if($catagorylist->hasFile('imaje'))
     {

          $file=$catagorylist->file('imaje');
          // dd($file);
          //generate file name
          $fileName=date('Ymdhms').'.'.$file->getClientOriginalExtension();
          $file->storeAs('/uploads',$fileName);
     }






     // dd($catagorylist->all());
     Catagory::Create([
          'catagory_title'=>$catagorylist->catagory_title,
               'max_adult'=>$catagorylist->max_adult,
               'max_child'=>$catagorylist->max_child,
               'no_of_bed'=>$catagorylist->no_of_bed,
               'imaje'=>$fileName,
               'description'=>$catagorylist->description,
              'price'=>$catagorylist->price


     ]);
     return redirect()->route('manage_catagory');
}

public function allRoom($id)
    {
      $rooms=Room::where('catagory_id',$id)->get();
     // dd($rooms);
     // $rooms=Catagory::with('rooms')->find($id);
     // dd($rooms);
         return view('backend.layouts.catagory.room_catagory-list',compact('rooms'));
    }
    public function catagory_under_room($id)
    {
     // $catagory_room_view=Room::with('catagory')->get()->take(4);
     
     //   $catagory_room=Room::where('catagory_id',$id)->get(); 
     $catagory_room_view=Catagory::with('rooms')->find($id);
     // dd($rooms);
         return view('frontend.layouts.room.catagory_under_room',compact('catagory_room_view'));
    }
    
}


     





