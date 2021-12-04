<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class Contact_controller extends Controller
{
    public function contact()
    {
        $contact=Auth::user();
        return view('frontend.layouts.contact.contact',compact('contact'));
    }
    public function read_enquiry()
    {
        $enquirylist=Contact::paginate(4);
         return view('backend.layouts.enquiry.read_enquiry',compact('enquirylist'));
    }

    //delete read quiry here
    public function delete($id)
    {
         // dd($id);
         // Room::destroy($id);
         $enquiry=Contact::find($id);
         if($enquiry)
         {
              $enquiry->delete();
              return redirect()->back()->with('message','delete successfully' );
         }
         return redirect()->back()->with('message','not found' );
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
        return redirect()->back()->with('message','your request send successfully');
    }
}
