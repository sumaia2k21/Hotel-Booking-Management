<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Book;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function bookingform($id)
    {
         $bookingform=Auth::user();
        $room = Room::find($id);
         return view('frontend.layouts.bookingform',compact('room','bookingform'));
    }
    
    public function bookingstore(Request $request)
    {
     //     dd($request->all());
     Book::Create([ 
               'room_id'=>$request->room_id,
               'name'=>$request->name,
               'user_id'=>Auth::id(),
               'mobile_no'=>$request->mobile_no,
               'email'=>$request->email,
               'address'=>$request->address,
               'checkin'=>$request->checkin,
               'checkout'=>$request->checkout
           ]);
           return redirect()->route('room');

        
    }
    public function mybooking()
    {
      
        $bookstatus=Book::where('user_id',Auth::id())->get();
        return view('frontend.layouts.account.my_booking',compact('bookstatus') );
    }
}
