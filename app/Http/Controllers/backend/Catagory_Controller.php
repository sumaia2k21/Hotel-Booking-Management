<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catagory;
use App\Models\Gallary;
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
    

     public function catagory_list(Request $catagorylist)
     {
          $catagorylist->validate([
               
               'catagory_title'=> 'required|unique:catagoris',
                 
     
           ]);
          $fileName='';
          if($catagorylist->hasFile('image'))
          {
               $file=$catagorylist->file('image');
               //generate file name
               $fileName=date('Ymdhms').'.'.$file->getClientOriginalExtension();
               $file->storeAs('/uploads',$fileName);
          }
     
          Catagory::Create([
                    'catagory_title'=>$catagorylist->catagory_title,
                    'image'=>$fileName,
                    'description'=>$catagorylist->description,
                    // 'price'=>$catagorylist-> price ,
                    
                    // 'discount_price'=>$catagorylist-> price-$catagorylist-> discount/100*$catagorylist-> price ,
                    
          ]);

          return redirect()->route('manage_catagory')->with('message', 'Room Category added successfully.');
     }

public function allRoom($id)
    {
      $rooms=Room::where('catagory_id',$id)->get();
         return view('backend.layouts.catagory.room_catagory-list',compact('rooms'));
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
          return redirect()->back()->with('message','no rooom found' );
     }
     public function edit($id)
     {
          $category=Catagory::find($id);
          return view('backend.layouts.catagory.edit',compact('category'));
     }

     public function update(Request $catagorylist, $id)
     {
          // $catagorylist->validate([
     
          //      'price'=> 'required',   
          //  ]);
         
          $category=Catagory::find($id);  
          $category->update([
               'discount'=>$catagorylist->discount,
               // 'price'=>$catagorylist-> price ,
               // 'discount_price'=>$catagorylist-> price-$catagorylist-> discount/100*$catagorylist-> price ,
          ]);

          $room=Room::find($id); 
          $room->update([
               'discount'=>$catagorylist->discount,
               // 'price'=>$catagorylist-> price ,
               // 'discount_price'=>$catagorylist-> price-$catagorylist-> discount/100*$catagorylist-> price ,
               


          ]);



          
          return redirect()->route('manage_catagory')->with('message','Successfully update discount');
      }

      public function confirmation($id)
     {
            $catagorylist=Catagory::find($id);
          // dd($request);
          return view('backend.layouts.catagory.confirmation',compact('catagorylist'));
     }

     public function active($id)
     {
     Catagory::find($id)->update([
     'status'=>'active'
     ]);
     return redirect()->route('manage_catagory')->with('message','discount active sucessfully'); 
     }
    
     public function  cancel($id)
     {
     Catagory::find($id)->update([
     'status'=>'cancel'
     ]);
     return redirect()->route('manage_catagory')->with('message','room cancel sucessfully'); 
     }

}


     





