<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class Page_controller extends Controller
{
    public function about_us()
    {
         return view('backend.layouts.page.about_us');
    }
    public function contact_us()
    {
     $contact=Page::first();
         return view('backend.layouts.page.contact_us',compact('contact'));
    }
    
    public function contact_uspost(Request $contact)
    {

          $contact=Page::first();
          if($contact)
          {
               //update
               $contact->update([
                    'name'=>$contact->name,
                         'email'=>$contact->email,
                         'mobile_no'=>$contact->mobile_no,
                         'description'=>$contact->description

               ]);
          }else{
                    Page::Create([
                         'name'=>$contact->name,
                         'email'=>$contact->email,
                         'mobile_no'=>$contact->mobile_no,
                         'description'=>$contact->description
                    
               
                    ]);
                   
                    
               }
               return redirect()->back();
          }
}
    
    
   
