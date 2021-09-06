<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class Booking_controller extends Controller
{
    public function new_booking()
    {
         return view('backend.layouts.new_booking');
    }
    public function all_booking()
    {
     $request=Book::paginate(7);
         return view('backend.layouts.all_booking',compact('request'));
    }
  

public function bookingform()
    {
         return view('frontend.layouts.bookingform');
    }
    
    public function bookingstore(Request $request)
    {
     //     dd($request->all());
     Book::Create([
               'name'=>$request->name,
               'mobile_no'=>$request->mobile_no,
               'email'=>$request->email,
               'address'=>$request->address,
               'checkin'=>$request->checkin,
               'checkout'=>$request->checkout
           ]);
           return redirect()->route('room');

        
    }

}
