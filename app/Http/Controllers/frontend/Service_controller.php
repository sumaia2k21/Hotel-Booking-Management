<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Facility;
use Illuminate\Http\Request;

class Service_controller extends Controller
{
    public function survice()
    {
        $facility=Facility::get()->take(6);
       //dd($facility);
        return view('frontend.layouts.service.service',compact('facility'));
    }
}
