<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Service_controller extends Controller
{
    public function survice()
    {
        return view('frontend.layouts.service.service');
    }
}
