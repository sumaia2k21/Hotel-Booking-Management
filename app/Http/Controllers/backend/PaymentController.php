<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Hotel;
use App\Models\Payment;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function paymentlist()
    {
    //    dd($_GET);
        $payment=Book::all();
        $pay=Payment::all();
        // $pay=Payment::where('payment_status','paid')->get();            
        return view('backend.layouts.payment.payment-list',compact('payment','pay'));
    }
    
    public function paymentform($id)
    {
        // $payment=Book::select('id')->get();
        $book=Book::find($id);
        

      //dd($book);
        return view('backend.layouts.booking.paymentform',compact('book'));  
    }
    
    
public function payment_store(Request $pay,$id){

$payment=Book::find($id);
$payment->update([
    'total_paid'=>$payment->total_paid+$pay->pay_ammount

]);

    Payment::Create([
        'book_id'=>$pay->book_id,
        'total_ammount'=>$pay->total_ammount,
        'discount_price'=>$pay->discount_price,
        'pay_ammount'=>$pay->pay_ammount,
        'due'=>$pay->discount_price-$payment->total_paid,
        'payment_type'=>$pay->payment_type,
        'transection'=>$pay->transection,
        'payment_date'=>$pay->payment_date,
        
        


    ]);
    if($payment->total_paid>=$payment->discount_price || $payment-> total_paid==$payment->discount_price )
    {
        $payment->update([
            'payment_status'=>"paid"
           
        ]);
        Payment::where('book_id',$payment->id)->update([
            'payment_status'=>'paid'
            

        ]);
    }
    return redirect()->route('all_booking');
}
public function edit($id)
    {
        $payment=Payment::find($id);
           
        return view('backend.layouts.payment.edit',compact('payment'));
    }
    public function delete($id)
     {
          // dd($id);
          // Room::destroy($id);
          $payment=Payment::find($id);
          if($payment)
          {
               $payment->delete();
               return redirect()->back()->with('message','delete successfully' );
          }
          return redirect()->back()->with('message','no payment found' );
     }
    public function update(Request $pay, $id)
    {
      

        $payment=Book::find($id);
        $payment->update([
            'total_paid'=>$payment->total_paid+$pay->pay_ammount
        
        ]);
        
        $payment=Payment::find($id);
        $payment->update([
            'discount_price'=>$pay->discount_price,
            'pay_ammount'=>$pay->pay_ammount,
            'due'=>$pay->discount_price-$pay->pay_ammount,
            'payment_type'=>$pay->payment_type,
            'transection'=>$pay->transection,
            'payment_date'=>$pay->payment_date,
           

        ]);
        return redirect()->route('payment.list');

    }

    public function report($id)
    {
        $user=Book::where('user_id',Auth::id())->get()->take(1);
        $bookinginfo=Book::where('id',$id)->get();
       $pay=Payment::where('book_id',$id)->get();
       $payment=Payment::where('id',$id)->get();
        return view('backend.layouts.payment.pay_reciept',compact('bookinginfo','user','pay','payment'));
    }

   
    public function search()
    {
        // dd($_GET['search']);

          $key=request()->search;
          $payment=Book::where('name','LIKE',"%{$key}%")->get(); 
        //   dd($payment);
        return view('backend.layouts.payment.payment_search_result',compact('payment'));
    }


}
