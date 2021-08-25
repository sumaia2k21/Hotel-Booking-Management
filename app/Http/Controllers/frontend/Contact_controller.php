<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;


class Contact_controller extends Controller
{
    public function contact()
    {
        return view('frontend.layouts.contact.contact');
    }
    public function read_enquiry()
    {
        $enquirylist=Contact::paginate(4);
         return view('backend.layouts.read_enquiry',compact('enquirylist'));
    }
    //db
    public function readenquiry(Request $enquirylist)
    {
        // dd($enquirylist->all());
        Contact::Create([

            'name'=>$enquirylist->name,
            'email'=>$enquirylist->email,
            'mobile_no'=>$enquirylist->mobile_no,
           'message' =>$enquirylist->message

        ]);
        return redirect()->route('read_enquiry');
    }
}
