<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class About_controller extends Controller
{
    public function about()
    {
        return view('frontend.layouts.about.about');
    }
}
