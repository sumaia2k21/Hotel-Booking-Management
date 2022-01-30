<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hotel;

class Hotel_Controller extends Controller
{
    //     hotelinfo form
    public function hotelinfo()
    {
          $checkinfo=Hotel::first();
         return view('backend.layouts.hotelinfo.hotelinfo',compact('checkinfo'));
    }
     
     public function hotelinfopost(Request $request)
     {
          $fileName='';
          if($request->hasFile('logo'))
          {
               $file=$request->file('logo');
               //generate file name
               $fileName=date('Ymdhms').'.'.$file->getClientOriginalExtension();
               $file->storeAs('/uploads',$fileName);
          }
          
          $checkinfo=Hotel::first();

          if($checkinfo)
          {
               //update
               $checkinfo->update([
                    'name'=>$request->name,
                    'email'=>$request->email, 
                   'logo'=>$fileName,
                    'address'=>$request->address,
                   'contact_no'=>$request->contact_no

               ]);
          }else{
         Hotel::Create([
              'name'=>$request->name,
                   'email'=>$request->email,
                  'logo'=>$fileName,
                   'address'=>$request->address,
                  'contact_no'=>$request->contact_no
         ]);
     }
         return redirect()->back();
     }
}
