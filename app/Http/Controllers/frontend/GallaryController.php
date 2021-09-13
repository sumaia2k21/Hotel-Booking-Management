<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GallaryController extends Controller
{
    public function gallary()
    {
        return view('frontend.layouts.gallary.gallary');
    }
}
