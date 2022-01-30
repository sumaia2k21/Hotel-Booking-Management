<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Book;
use App\Models\Catagory;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function bookingform($id)
    { 
       
       
         $bookingform=Auth::user();
        $room = Room::find($id);
        $payment=Book::all();
        $value = session()->all(); //extracting all data from session
        //  dd($value);
         return view('frontend.layouts.bookingform',compact('room','bookingform','payment','value'));
        
    }
    
    public function bookingstore(Request $request)
    {
        // $request->validate([
        //     'name'=> 'required',
        //     'mobile'=> 'required|email|unique:users,email',
        //     'email'=> 'required|min:6',
        // ]);
        if (auth()->user()) {  
           
            
        $isBooked=Book::where('room_id',$request->room_id)
        ->where('from_date','<=',$request->from_date)
        ->where('to_date','>=',$request->from_date)
        ->first();

        $from_date = \Carbon\Carbon::createFromFormat('Y-m-d', $request->from_date);
        $to_date = \Carbon\Carbon::createFromFormat('Y-m-d',$request->to_date );
        
        $diff_in_days = $to_date->diffInDays($from_date);

        $room=Room::find($request->room_id);
        if(auth()->user()->id !=1)
        {

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
               
                'discount'=>$request->discount,
                'discount_price'=>$request->discount_price,
                'status'=>$request->status
                    ]);
                    return redirect()->route('mybooking.status')->with('message','booking successful.');
                }else{
                    return redirect()->back()->with('message','Room not available on this dates.');
                 }
        
            }else{
         return redirect()->back()->with('message','Admin can not book room ');
        }
    } else {
        return redirect()->back()->with('message','You need to login first');
      }
    }
    


        
  
    public function mybooking()
    {
      
        $bookstatus=Book::where('user_id',Auth::id())->get();
        // dd($bookstatus);
        return view('frontend.layouts.account.my_booking',compact('bookstatus') );
    }
    public function invoice($id)
    {
       
        $user=Book::where('user_id',Auth::id())->get()->take(1);
        $bookinginfo=Book::where('id',$id)->get();
       $pay=Payment::where('book_id',$id)->get();
       $category=Catagory::find($id);
       //dd($pay);
        return view('frontend.layouts.account.invoice',compact('bookinginfo','user','pay','category') ); 
    }
    public function testinvoice()
    {
       
        $user=Book::where('user_id',Auth::id())->get()->take(1);
        $bookinginfo=Book::where('user_id',Auth::id())->get();
       
        return view('frontend.layouts.account.test_invoice',compact('bookinginfo','user') ); 
    }
}

