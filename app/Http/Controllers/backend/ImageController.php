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

        if ($request->hasfile('images')) {
            $images = $request->file('images');

            foreach($images as $image) {
                $name = $image->getClientOriginalName();
                $path = $image->storeAs('uploads', $name, 'public');

              Multipleimage::create([
                    'name' => $name,
                    'path' => '/storage/'.$path
                  ]);
            }
         }

         return redirect()->route('images.table')->with('success', 'Images uploaded successfully');
    }
    
    public function images_table()
    {
      $images=Multipleimage::paginate(15);
      return view('backend.layouts.gallary.imagetable',compact('images'));
    }
}
