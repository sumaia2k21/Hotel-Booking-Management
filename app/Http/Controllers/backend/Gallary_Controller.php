<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Gallary;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class Gallary_Controller extends Controller
{
   public function gallaries()
   {
       return view('backend.layouts.gallary.gallary');
   }
   public function gallaries_post(Request $request)
   {
     $request->validate([
          'image' => 'required',
        ]);

          
          if($request->hasFile('image'))
          {
               foreach($request->file('image')as $key=>$file) {
               //generate file name
                $photo=uniqid('photo',more_entropy:true).'.'.$file->getClientOriginalName();
               //  $file->move(public_path('uploads'),'$photo');
               $file->storeAs('/uploads',$photo);
         
               $fileName[] =  $photo;
               }

               // dd($fileName); 
               foreach($fileName as $filename){
                    Gallary::create([
                         'image'=>$filename
                   ]);
               }

              
          }

          
            return redirect()->route('gallerystore')->with('success', 'Images uploaded successfully');
     }
        
     public function gallerytable()
          {
               
          $gallerytable=Gallary::all();
               return view('backend.layouts.gallary.gallerytable',compact('gallerytable'));
          }

          public function delete($id)
          {
               // dd($id);
               // Room::destroy($id);
               $gallery=Gallary::find($id);
               if($gallery)
               {
                    $gallery->delete();
                    return redirect()->back()->with('message','delete successfully' );
               }
               return redirect()->back()->with('message','no imaje found' );
          }
          
     }


