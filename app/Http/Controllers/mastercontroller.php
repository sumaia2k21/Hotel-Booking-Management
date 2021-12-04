<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Book;
use App\Models\Facility;
use App\Models\Contact;
use App\Models\Catagory;
use App\Models\Gallary;
use App\Models\Staff;
use App\Models\User;

class mastercontroller extends Controller
{
    public function master()
    {
         return view('backend.master');
    }
    public function dashboard()
    {
     $newroomlist=Room::with('catagory')->count();
     $request=Book::with('room')->count();
     $facilitylist=Facility::count();
     $enquirylist=Contact::count();
     $catagorylist=Catagory::count();
     $userlist=Staff::count();
     $approved=Book::with('room')->where('status','Booked')->count();
     $cencel=Book::with('room')->where('status','cancel')->count();
     $user=User::where('role','=','customer')->count();
     $newbooking=Book::with('room')->where('status','pending')->count();
         return view('backend.layouts.home.home',compact('newroomlist','request','facilitylist','enquirylist','catagorylist','approved','cencel','user','newbooking','userlist'));
    }



    public function profilecreate()
    {
         return view('backend.layouts.profile');
    }
    public function test()
    {
         return view('test');
    }
    
  


   
    
     
    
}
