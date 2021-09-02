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
     $facilitylist=Facility::paginate(7);
     

     return view('backend.layouts.manage_facilities',compact('facilitylist'));
    }
//     facility_list
    public function facility_list(Request $facilitylist)
    {
     //    dd($facilitylist->all());
     // dd($newroomlist->all());
     // dd(date('Ymdhms').'.'.$newroomlist->file('imaje')->getClientOriginalExtension());
     $fileName='';
     if($facilitylist->hasFile('imaje'))
     {

          $file=$facilitylist->file('imaje');
          // dd($file);
          //generate file name
          $fileName=date('Ymdhms').'.'.$file->getClientOriginalExtension();
          $file->storeAs('/uploads',$fileName);
     }

      Facility::Create([
          'imaje'=>$fileName,
          'facility_title'=>$facilitylist->facility_title,
          'description'=>$facilitylist->description
                    
     
     
          ]);
          return redirect()->route('manage_facilities');
     }
    }
    
    

