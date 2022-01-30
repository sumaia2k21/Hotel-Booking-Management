<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Payment;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Booking_controller extends Controller
{
    
    public function all_booking()
    {

     $request=Book::with('room')->latest()->paginate(7);
     
    //  dd($request);
         return view('backend.layouts.booking.all_booking',compact('request',));
    }
  //delete here
  public function delete($id)
{
     // dd($id);
     // Room::destroy($id);
     $room=Book::find($id);
     if($room)
     {
          $room->delete();
          return redirect()->back()->with('message','delete successfully' );
     }
     return redirect()->back()->with('message','no product found' );
}

     public function confirmation($id)
     {
            $request=Book::with('room')->find($id);
          // dd($request);
          return view('backend.layouts.booking.confirmation',compact('request'));
     }

     public function approve($id)
     {
     Book::find($id)->update([
     'status'=>'Booked'
     ]);
     return redirect()->route('approved.booking.list')->with('message','room approved sucessfully'); 
     }
    
     public function  cancel($id)
     {
     Book::find($id)->update([
     'status'=>'cancel'
     ]);
     return redirect()->route('cancel.booking.list')->with('message','room cancel sucessfully'); 
     }


     public function approved_booking_list()
    {
          $request=Book::with('room')->where('status','Booked')->get();
         return view('backend.layouts.booking.approved_booking_ list',compact('request'));
    }
    public function cancel_booking_list()
    {
          $request=Book::with('room')
          ->where('status','cancel')->get();
         return view('backend.layouts.booking.cancel_booking_list',compact('request'));
    }
    public function new_booking_list()
    {
     $request=Book::with('room')
     ->where('status','pending')->get();
          // dd($request->all());
         return view('backend.layouts.booking.new-booking-list',compact('request'));
    }

    public function all_booking_report()
    {
     $request=Book::with('room')->paginate(7);
     //  dd($request);
          return view('backend.layouts.booking.all-booking-report',compact('request'));
    }




     // public function invoice()
     // {
     //      return view('backend.layouts.booking.invoice');
     // }


}
