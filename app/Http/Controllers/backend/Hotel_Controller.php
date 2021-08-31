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
         return view('backend.layouts.hotelinfo',compact('checkinfo'));
    }
    //    hotelinfo_list
     public function  hotelinfo_list()
     {
          return view('backend.layouts.hotelinfo_list');
     }
     
     public function hotelinfopost(Request $hotelinfopost){
     // dd($hotelinfopost->all());
          $checkinfo=Hotel::first();
          if($checkinfo)
          {
               //update
               $checkinfo->update([
                    'name'=>$hotelinfopost->hotel_name,
                    'email'=>$hotelinfopost->email,
                    
                   'logo'=>$hotelinfopost->imaje,
         
                    'address'=>$hotelinfopost->address,
                   'contact_no'=>$hotelinfopost->contact_no

               ]);
          }else{
         Hotel::Create([
              'name'=>$hotelinfopost->hotel_name,
                   'email'=>$hotelinfopost->email,
                   
                  'logo'=>$hotelinfopost->imaje,
        
                   'address'=>$hotelinfopost->address,
                  'contact_no'=>$hotelinfopost->contact_no
         ]);
     }
         return redirect()->back();
        }

   
        





}
