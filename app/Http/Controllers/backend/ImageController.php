<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Multipleimage;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function image()
    {

      return view('backend.layouts.gallary.image');
    }

    public function store(Request $request)
    {
        $request->validate([
          'images' => 'required',
        ]);
        $fileName='';
        if ($request->hasfile('images')) {
            $images = $request->file('images');

            foreach($images as $image) {
                $fileName=date('Ymdhms').'.'.$image->getClientOriginalExtension();
                $image->storeAs('/uploads',$fileName);
                }

                Multipleimage::create([
                  'images'=>$fileName,
                    
                  ]);
            
         }

        return redirect()->route('images.table')->with('success', 'Images uploaded successfully');
    }
    
    public function images_table()
    {
      $images=Multipleimage::paginate(15);
      return view('backend.layouts.gallary.imagetable',compact('images'));
    }
}
