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
         return view('backend.layouts.add_catagory');
    }

    public function manage_catagory( )
    {
         $catagorylist=Catagory::paginate(8);
     

         return view('backend.layouts.manage_catagory',compact('catagorylist'));
    }
    

public function catagory_list(Request $catagorylist){
     // dd($catagorylist->all());
     Catagory::Create([
          'catagory_title'=>$catagorylist->catagory_title,
               'max_adult'=>$catagorylist->max_adult,
               'max_child'=>$catagorylist->max_child,
               'no_of_bed'=>$catagorylist->no_of_bed,
               'imaje'=>$catagorylist->imaje,
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
         return view('backend.layouts.room_catagory-list',compact('rooms'));
    }

    
}


     





