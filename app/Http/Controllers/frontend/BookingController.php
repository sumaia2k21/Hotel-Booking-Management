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
    $payment=Book::all();
        
         return view('frontend.layouts.bookingform',compact('room','bookingform','payment'));
    }
    
    public function bookingstore(Request $request)
    {
           

        $isBooked=Book::where('room_id',$request->room_id)
        ->where('from_date','<=',$request->from_date)
        ->where('to_date','>=',$request->from_date)
        ->first();

        $from_date = \Carbon\Carbon::createFromFormat('Y-m-d', $request->from_date);
        $to_date = \Carbon\Carbon::createFromFormat('Y-m-d',$request->to_date );
        
        $diff_in_days = $to_date->diffInDays($from_date);

        $room=Room::find($request->room_id);
        if(!$isBooked && auth()->user()->id !=1)
        {

            Book::Create([ 
               'room_id'=>$request->room_id,
               'name'=>$request->name,
               'user_id'=>Auth::id(),
               'mobile_no'=>$request->mobile_no,
               'email'=>$request->email,
               'address'=>$request->address,
               'from_date'=>$request->from_date,
               'to_date'=>$request->to_date,
               'total_ammount'=>$diff_in_days*$room->price,
               'status'=>$request->status
           ]);return redirect()->back()->with('message','booking successful.');
        }else{
         return redirect()->back()->with('message','Admin cannot book any room');
        }
        if(!$isBooked )
        {
            
            Book::Create([ 
                'room_id'=>$request->room_id,
                'name'=>$request->name,
                'user_id'=>Auth::id(),
                'mobile_no'=>$request->mobile_no,
                'email'=>$request->email,
                'address'=>$request->address,
                'from_date'=>$request->from_date,
                'to_date'=>$request->to_date,
                'total_ammount'=>$diff_in_days*$room->price,
                'status'=>$request->status
            ]);
            return redirect()->back()->with('message','booking successful.');
        }
        else{
         return redirect()->back()->with('message','Room not available on this dates.');
        }
    }
    


        
  
    public function mybooking()
    {
      
        $bookstatus=Book::where('user_id',Auth::id())->get();
        // dd($bookstatus);
        return view('frontend.layouts.account.my_booking',compact('bookstatus') );
    }
}
