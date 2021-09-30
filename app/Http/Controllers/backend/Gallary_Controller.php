<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Gallary;
use Illuminate\Http\Request;

class Gallary_Controller extends Controller
{
   public function gallaries()
   {
       return view('backend.layouts.gallary.gallary');
   }
   public function gallaries_post(Request $request)
   {

$fileName='';
          if($request->hasFile('image1'))
          {
               $file=$request->file('image1');
               //generate file name
               $fileName=date('Ymdhms').'.'.$file->getClientOriginalExtension();
               $file->storeAs('/uploads',$fileName);
          }
          $fileName='';
          if($request->hasFile('image2'))
          {
               $file=$request->file('image2');
               //generate file name
               $fileName=date('Ymdhms').'.'.$file->getClientOriginalExtension();
               $file->storeAs('/uploads',$fileName);
          }
          $fileName='';
          if($request->hasFile('image3'))
          {
               $file=$request->file('image3');
               //generate file name
               $fileName=date('Ymdhms').'.'.$file->getClientOriginalExtension();
               $file->storeAs('/uploads',$fileName);
          }
          $fileName='';
          if($request->hasFile('image4'))
          {
               $file=$request->file('image4');
               //generate file name
               $fileName=date('Ymdhms').'.'.$file->getClientOriginalExtension();
               $file->storeAs('/uploads',$fileName);
          }
          $fileName='';
          if($request->hasFile('image5'))
          {
               $file=$request->file('image5');
               //generate file name
               $fileName=date('Ymdhms').'.'.$file->getClientOriginalExtension();
               $file->storeAs('/uploads',$fileName);
          }
          $fileName='';
          if($request->hasFile('image6'))
          {
               $file=$request->file('image6');
        
               $fileName=date('Ymdhms').'.'.$file->getClientOriginalExtension();
               $file->storeAs('/uploads',$fileName);
          }
          $fileName='';
          if($request->hasFile('image6'))
          {
               $file=$request->file('image6');
               //generate file name
               $fileName=date('Ymdhms').'.'.$file->getClientOriginalExtension();
               $file->storeAs('/uploads',$fileName);
          }
          $fileName='';
          if($request->hasFile('image7'))
          {
               $file=$request->file('image7');
               //generate file name
               $fileName=date('Ymdhms').'.'.$file->getClientOriginalExtension();
               $file->storeAs('/uploads',$fileName);
          }
          $fileName='';
          if($request->hasFile('image8'))
          {
               $file=$request->file('image8');
               //generate file name
               $fileName=date('Ymdhms').'.'.$file->getClientOriginalExtension();
               $file->storeAs('/uploads',$fileName);
          }

          
          $checkinfo=Gallary::first();

          if($checkinfo)
          {
               //update
               $checkinfo->update([
                        'image1'=>$fileName,
                        'image2'=>$fileName,
                        'image3'=>$fileName,
                        'image4'=>$fileName,
                        'image5'=>$fileName,
                        'image6'=>$fileName,
                        'image7'=>$fileName,
                        'image8'=>$fileName,

               ]);
          }else{
                 Gallary::Create([
                    'image1'=>$fileName,
                    'image2'=>$fileName,
                    'image3'=>$fileName,
                    'image4'=>$fileName,
                    'image5'=>$fileName,
                    'image6'=>$fileName,
                    'image7'=>$fileName,
                    'image8'=>$fileName,
                ]);
            }

        }
