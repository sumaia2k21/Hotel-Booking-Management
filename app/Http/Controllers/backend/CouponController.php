<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function addcoupon()
    {
         return view('backend.layouts.coupon.add_coupon');
    }
  
    public function coupon_post(Request $request)
    {

      Coupon::Create([
          'code'=>$request->code,
          'type'=>$request->type,
          'value'=>$request->value
          ]);
          return redirect()->route('coupon.store')->with('message','coupon add successfully');
     }

     public function coupon_store()
     {
         $coupon=Coupon::all();
          return view('backend.layouts.coupon.view_coupon',compact('coupon'));
     }
 

}
