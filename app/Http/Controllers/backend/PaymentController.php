<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function paymentlist()
    {
        $payment=Book::all();
        $pay=Payment::all();
        return view('backend.layouts.payment.payment-list',compact('payment','pay'));
    }
    public function paymentform($id)
    {
        // $payment=Book::select('id')->get();
        $book=Book::find($id);
        

     //    dd($payment);
        return view('backend.layouts.booking.paymentform',compact('book'));  
    }
    
    
public function payment_store(Request $pay){

    Payment::Create([
        'book_id'=>$pay->book_id,
        'total_ammount'=>$pay->total_ammount,
        'discount'=>$pay->discount,
        'discount_price'=>$pay->discount_price,
        'pay_ammount'=>$pay->pay_ammount,
        'due'=>$pay->total_ammount-$pay->pay_ammount,
        'payment_type'=>$pay->payment_type,
        'transection'=>$pay->transection,
        'payment_date'=>$pay->payment_date,
        


    ]);
    return redirect()->route('payment.list');
}
public function edit($id)
    {
        $payment=Payment::find($id);
           
        return view('backend.layouts.payment.edit',compact('payment'));
    }
    public function update(Request $request, $id)
    {
        $payment=Payment::find($id);
        $payment->update([
            'pay_ammount'=>$request->pay_ammount,
            'due'=>$request->total_ammount-$request->pay_ammount,
            'payment_type'=>$request->payment_type,
            'transection'=>$request->transection,
            'payment_date'=>$request->payment_date,

        ]);
        return redirect()->back();

    }

}
