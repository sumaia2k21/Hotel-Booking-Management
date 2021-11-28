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
          'image1' => 'required',
        ]);

          $fileName='';
          if($request->hasFile('image1'))
          {
               $file=$request->file('image1');
              
               //generate file name
               $fileName=date('Ymdhms').'.'.$file->getClientOriginalExtension();
               $file->storeAs('/uploads',$fileName);
          }
          Gallary::Create([
                    'image1'=>$fileName,
                    'img_src'=>$request->img_src,
                   'img_alt'=>$request->img_alt
     
     
          ]);
         
          
            return redirect()->route('gallerystore')->with('success', 'Images uploaded successfully');
        }
        
     public function gallerytable()
          {
               
          $gallerytable=Gallary::paginate(15);
               return view('backend.layouts.gallary.gallerytable',compact('gallerytable'));
          }
     }