<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Booking_controller extends Controller
{
    public function new_booking()
    {
         return view('backend.layouts.new_booking');
    }
    public function all_booking()
    {
         return view('backend.layouts.all_booking');
    }
   // newbooking
   public function catagory_list(Request $catagorylist){
     //dd($catagorylist->all());
     Book::Create([
          'name'=>$catagorylist->name,
               'email'=>$catagorylist->email,
              'catagory_title'=>$catagorylist->catagory_title


     ]);
     return redirect()->route('manage_catagory');
}

}
