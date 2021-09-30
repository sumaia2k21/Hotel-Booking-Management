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
     if($catagorylist->hasFile('image'))
     {

          $file=$catagorylist->file('image');
          // dd($file);
          //generate file name
          $fileName=date('Ymdhms').'.'.$file->getClientOriginalExtension();
          $file->storeAs('/uploads',$fileName);
     }






     // dd($catagorylist->all());
     Catagory::Create([
          'catagory_title'=>$catagorylist->catagory_title,
               // 'max_adult'=>$catagorylist->max_adult,
               // 'max_child'=>$catagorylist->max_child,
               // 'no_of_bed'=>$catagorylist->no_of_bed,
               'image'=>$fileName,
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
    
     $catagory_room_view=Catagory::with('rooms')->find($id);
     // dd($rooms);
         return view('frontend.layouts.room.catagory_under_room',compact('catagory_room_view'));
    }
    public function delete($id)
{
     // dd($id);
     // Room::destroy($id);
     $catagory=Catagory::find($id);
     if($catagory)
     {
          $catagory->delete();
          return redirect()->back()->with('message','delete successfully' );
     }
     return redirect()->back()->with('message','no product found' );
}
}


     





