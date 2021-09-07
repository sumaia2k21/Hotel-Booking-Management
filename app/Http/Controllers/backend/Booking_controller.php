<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Room;
use Illuminate\Http\Request;

class Booking_controller extends Controller
{
    public function new_booking()
    {
         return view('backend.layouts.booking.new_booking');
    }
    public function all_booking()
    {
     $request=Book::with('room')->paginate(7);
    //  dd($request);
         return view('backend.layouts.booking.all_booking',compact('request'));
    }
  

public function bookingform($id)
    {
        $room = Room::find($id);
         return view('frontend.layouts.bookingform',compact('room'));
    }
    
    public function bookingstore(Request $request)
    {
     //     dd($request->all());
     Book::Create([ 
               'room_id'=>$request->room_id,
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
