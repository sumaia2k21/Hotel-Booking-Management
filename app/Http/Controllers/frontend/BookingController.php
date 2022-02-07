<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Book;
use App\Models\BookDetails;
use App\Models\Catagory;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
       //single booking
    //    public function bookingform($id)
    // { 
       
       
    //      $bookingform=Auth::user();
    //     $room = Room::find($id);
    //     $payment=Book::all();
    //     $value = session()->all(); 
      
    //      return view('frontend.layouts.bookingform',compact('room','bookingform','payment','value'));
        
    // }
    
    // public function bookingstore(Request $request)
    // {
        
    //     if (auth()->user()) {  
           
            
    //     $isBooked=Book::where('room_id',$request->room_id)
    //     ->where('from_date','<=',$request->from_date)
    //     ->where('to_date','>=',$request->from_date)
    //     ->first();

    //     $from_date = \Carbon\Carbon::createFromFormat('Y-m-d', $request->from_date);
    //     $to_date = \Carbon\Carbon::createFromFormat('Y-m-d',$request->to_date );
        
    //     $diff_in_days = $to_date->diffInDays($from_date);

    //     $room=Room::find($request->room_id);
    //     if(auth()->user()->id !=1)
    //     {

    //             if(!$isBooked )
    //             {
    //             Book::Create([ 
    //             'room_id'=>$request->room_id,
    //             'name'=>$request->name,
    //             'user_id'=>Auth::id(),
    //             'mobile_no'=>$request->mobile_no,
    //             'email'=>$request->email,
    //             'address'=>$request->address,
    //             'from_date'=>$request->from_date,
    //             'to_date'=>$request->to_date,
    //             'total_ammount'=>$diff_in_days*$room->price,
               
    //             'discount'=>$request->discount,
    //             'discount_price'=>$request->discount_price,
    //             'status'=>$request->status
    //                 ]);
    //                 return redirect()->route('mybooking.status')->with('message','booking successful.');
    //             }else{
    //                 return redirect()->back()->with('message','Room not available on this dates.');
    //              }
        
    //         }else{
    //      return redirect()->back()->with('message','Admin can not book room ');
    //     }
    // } else {
    //     return redirect()->back()->with('message','You need to login first');
    //   }
    // }
    


        
       //single booking
  
    public function mybooking()
    {
       
        $book=Book::where('user_id',Auth::id())->get();
        return view('frontend.layouts.account.my_booking',compact('book') );
    }

    
    public function invoice($id)
    {
       $book=BookDetails::with ('room','book')->where('book_id',$id)->get();
    //  $booking=Book::where('user_id',Auth::id())->get();
     
        $user=Book::where('id',$id)->get();
        $payment=Payment::with('book')->where('book_id',$id)->get();
        return view('frontend.layouts.account.invoice',compact('book','user','payment') ); 
    }

     //user cancel booking
    public function  cancel($id)
    {
        $book = Book::where('id',$id)->first();
        $book->update([
         'status'=>'cancel'
         ]);
          return redirect()->back()->with('message','room cancel sucessfully'); 
        }
    //end cancel booking


   
    //start checkout
    
    public function checkoutform()
    {

        if (auth()->user()) 
        {
        $bookingform=Auth::user();
        $payment=Book::all();
        $value = session()->all();
        $rooms = session()->get('cart');
        // dd($rooms);
        return view('frontend.layouts.cart.checkoutform',compact('bookingform','payment','value','rooms') ); 

    } else {
        return redirect()->back()->with('message','You need to login first');
      }
    }

  
    public function checkout(Request $request)
    {
        if (auth()->user()) 
        { 
            // insert order data into order table- user_id, total
            $carts= session()->get('cart');

            $from_date = \Carbon\Carbon::createFromFormat('Y-m-d', $request->from_date);
            $to_date = \Carbon\Carbon::createFromFormat('Y-m-d',$request->to_date );
            
            $diff_in_days = $to_date->diffInDays($from_date);
            $room=Room::find($request->room_id);
           
            if($carts)
                { 
                 $book= Book::Create([ 
                    
                        'name'=>$request->name,
                        'user_id'=>auth()->user()->id,
                        'mobile_no'=>$request->mobile_no,
                        'email'=>$request->email,
                        'address'=>$request->address,
                        'from_date'=>$request->from_date,
                        'to_date'=>$request->to_date,
                        'total_ammount'=>array_sum(array_column($carts,'price'))  * $diff_in_days,
                        'discount'=>array_sum(array_column($carts,'discount')),
                        'discount_price'=>array_sum(array_column($carts,'discount_price'))  * $diff_in_days,
                        'status'=>'pending'
                            ]);
                    
                    
                    // insert details into order details table
                    foreach ($carts as $cart)
                    {
                    
                        BookDetails::create([
                            'book_id'=> $book->id,
                            'room_id'=>$cart['room_id'],
                            'per_night_price'=>$cart['discount_price'],
                            'number_of_days'=>$diff_in_days,
                            'quantity'=> $cart['room_qty'], 
                            'subtotal'=> ($cart['discount_price']* $diff_in_days),
                        ]);
                    }
                    session()->forget('cart');
                    return redirect()->route('mybooking.status')->with('message','Book room Successfully.');
                }
            return redirect()->back()->with('message','No Room found in booking.');
        } else {
        return redirect()->back()->with('message','You need to login first');
      }

    }


//end checkout

    
    public function add_to_cart($id)
    {
        
       $room=Room::find($id);
     
       if(!$room)
       {
           return redirect()->back()->with('error','no room found');
       }
       //cart is empty
       $cartExist=session()->get('cart');
       
       if(!$cartExist)
       {
           $cartdata=[
               $id=>[
                 'room_id'=>$id,
                   'catagory_id'=>$room->catagory_id,
                   'room_name'=>$room->room_name,
                   'room_number'=>$room->room_number,
                   'max_child'=>$room->room_number,
                   'no_of_bed'=>$room->no_of_bed,
                   'price'=>$room->price,
                   'discount_price'=>$room->discount_price,
                   'discount'=>$room->discount,
                   'room_qty'=>1,           

               ]
           ];
        //    dd($cartdata);
           session()->put('cart',$cartdata);
           return redirect()->back();
       }
    //    dd($cartExist);
       if(!isset($cartExist[$id]))
       {
           $cartExist[$id] = [
            'room_id'=>$id,
            'catagory_id'=>$room->catagory_id,
            'room_name'=>$room->room_name,
            'room_number'=>$room->room_number,
            'max_child'=>$room->room_number,
            'no_of_bed'=>$room->no_of_bed,
            'price'=>$room->price,
            'discount_price'=>$room->discount_price,
            'discount'=>$room->discount,
            'room_qty'=>1,
            
           ];

           session()->put('cart', $cartExist);

           return redirect()->back()->with('message', 'Room Added to Cart.');
           
       }
        return redirect()->back()->with('message', 'Already Room Added to Cart.');

    }
    


    public function getCart()
    {
        $value = session()->all(); //extracting all data from session
        
       $carts=session()->get('cart');
    //    dd(session()->get('cart'));
        return view('frontend.layouts.cart.cartlist',compact('carts','value'));
   
    }
    //delete
    public function cart_delete($id)
    {
        $cart= \session('cart');
        unset($cart[$id]);
        session()->put('cart',$cart);
        return redirect()->back();
    }
    //delete
    
    public function clearCart()
    {
        session()->forget('cart');
        return redirect()->back()->with('message','Cart cleared successfully.');

    }
}
