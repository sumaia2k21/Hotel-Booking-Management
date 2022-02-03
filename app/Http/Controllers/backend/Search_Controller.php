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

    //    $room_ids=Book::pluck('room_id')->toArray();
       
       $book=Book::WhereBetween('from_date',[$from_date,$to_date])
       ->get();
    //    dd($book);
    //    $room_ids=collect($book)->pluck('room_id')->toArray();

    //    $book=Book::whereNotIn('id',$room_ids)->get();
  


        return view('backend.layouts.booking.search_result',compact('book','from_date','to_date'));
    }


    
}
