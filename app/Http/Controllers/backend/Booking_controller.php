<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\BookDetails;
use App\Models\Payment;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Booking_controller extends Controller
{
    
     
    public function all_booking()
    {
     // $request=Book::with('user','pay')->latest()->paginate(7);
     $request=Book::with('user')->get();
         return view('backend.layouts.booking.all_booking',compact('request'));
    }

  //delete here
     public function delete($id)
     {
          $room=Book::find($id);
          if($room)
          {
               $room->delete();
               return redirect()->back()->with('message','delete successfully' );
          }
          return redirect()->back()->with('message','no room found' );
     }


     public function confirmation_list($id)
     {
          $book=BookDetails::with('room','book')->where('book_id',$id)->get();
          return view('backend.layouts.booking.confirmation',compact('book'));
     }
     //single view
     public function  single_view($id)
     {
          // $request=Book::with('user')->get();
          $request=Book::where('id',$id)->get();
          return view('backend.layouts.booking.single_view',compact('request'));
     }
     //single view end

     public function approve($id)
     {
         $book = Book::where('id',$id)->first();
         $book->update([
          'status'=>'Booked'
          ]);
         
          $book->bookingdetails->each(function($details){

               $details->room->each(function($room){
                    $room->update([
                         'status' => 'cancel'
                    ]);
               });
         });
          return redirect()->route('all_booking')->with('message','room approved sucessfully'); 
     }
    
     public function  cancel($id)
     {
         $book = Book::where('id',$id)->first();
         $book->update([
          'status'=>'cancel'
          ]);

         $book->bookingdetails->each(function($details){
               $details->room->each(function($room){
                    $room->update([
                         'status' => 'available'
                    ]);
               });
         });



          return redirect()->route('all_booking')->with('message','room cancel sucessfully'); 
     }


     public function approved_booking_list()
    {
         
          $request=Book::with('room')
          ->where('status','Booked')->get();
          return view('backend.layouts.booking.approved_booking_list',compact('request'));
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
          $request=Book::all();
          //  dd($request);
               return view('backend.layouts.booking.all-booking-report',compact('request'));
    }




   

 public function   booking_details()
     {
          $request=Book::all();
    
          return view('backend.layouts.booking.booking_details',compact('request'));
     }
     
    

     
}
