<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Facility;

class Facilities_controller extends Controller
{
    public function add_facilities()
    {
         return view('backend.layouts.add_facilities');
    }
    public function manage_facilities()
    {
     $facilitylist=Facility::paginate(4);
     

     return view('backend.layouts.manage_facilities',compact('facilitylist'));
    }
//     facility_list
    public function facility_list(Request $facilitylist)
    {
     //    dd($facilitylist->all());
      Facility::Create([
          'facility_title'=>$facilitylist->imaje,
          'description'=>$facilitylist->facility_title,
                    'imaje'=>$facilitylist->description
     
     
          ]);
          return redirect()->route('manage_facilities');
     }
    }
    
    

