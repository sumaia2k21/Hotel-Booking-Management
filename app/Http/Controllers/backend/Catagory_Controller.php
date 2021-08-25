<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catagory;

class Catagory_Controller extends Controller
{
     
    public function add_catagory()
    {
         return view('backend.layouts.add_catagory');
    }

    public function manage_catagory( )
    {
         $catagorylist=Catagory::paginate(4);
     

         return view('backend.layouts.manage_catagory',compact('catagorylist'));
    }
    

public function catagory_list(Request $catagorylist){
     // dd($catagorylist->all());
     Catagory::Create([
          'catagory_title'=>$catagorylist->catagory_title,
               'description'=>$catagorylist->description,
              'price'=>$catagorylist->price


     ]);
     return redirect()->route('manage_catagory');
}
}


     





