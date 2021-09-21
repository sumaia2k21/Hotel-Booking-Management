<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Room;
use Illuminate\Http\Request;

class Search_Controller extends Controller
{
    public function booking_search(Request $request)
    {
        $from_date = $request->from_date;
       $to_date = $request->to_date;
       
       $books=Book::select('room_id')->whereBetween('from_date',[date('m-d-Y',strtotime($request->from_date)),date('m-d-Y',strtotime($request->to_date))])
       ->orWhereBetween('to_date',[date('Y-m-d',strtotime($request->from_date)),date('Y-m-d',strtotime($request->to_date))])
       ->get();
       $room_ids=collect($books)->pluck('room_id')->toArray();

       $available=Book::whereNotIn('id',$room_ids)->get();
  
    

        return view('backend.layouts.booking.search_result',compact('available','from_date','to_date'));
    }
}
