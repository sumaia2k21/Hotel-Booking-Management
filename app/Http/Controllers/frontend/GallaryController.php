<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Gallary;
use App\Models\Multipleimage;
use Illuminate\Http\Request;

class GallaryController extends Controller
{
    public function gallary()
    {
        $gallary=Gallary::all();
        // $gallary=Multipleimage::all();
        return view('frontend.layouts.gallary.gallary',compact('gallary'));
    }
}
