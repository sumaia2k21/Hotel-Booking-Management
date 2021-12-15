<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Catagory;
use Illuminate\Http\Request;
use App\Models\Facility;

class Facilities_controller extends Controller
{
    public function add_facilities()
    {
         return view('backend.layouts.facility.add_facilities');
    }
    public function manage_facilities()
    {
     $facilitylist=Facility::paginate(7);
     

     return view('backend.layouts.facility.manage_facilities',compact('facilitylist'));
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

          //delete here
     public function delete($id)
     {
          // dd($id);
          // Room::destroy($id);
          $facility=Facility::find($id);
          if($facility)
          {
               $facility->delete();
               return redirect()->back()->with('message','delete successfully' );
          }
          return redirect()->back()->with('message','no product found' );
     }

     public function edit($id)
     {
          $facility=Facility::find($id);  
          return view('backend.layouts.facility.edit',compact('facility'));
        
      }
      public function update(Request $facilitylist, $id)
      {
          $fileName='';
          if($facilitylist->hasFile('imaje'))
          {
     
               $file=$facilitylist->file('imaje');
               // dd($file);
               //generate file name
               $fileName=date('Ymdhms').'.'.$file->getClientOriginalExtension();
               $file->storeAs('/uploads',$fileName);
          }
     
          //  dd($facilitylist->all());
           $facility=Facility::find($id);  
           $facility->update([
               'imaje'=>$fileName,
               'facility_title'=>$facilitylist->facility_title,
               'description'=>$facilitylist->description


           ]);
           return redirect()->route('manage_facilities')->with('message','update facilities');
       }

}
    
    

