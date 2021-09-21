<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Frontend\RoomController;
use App\Models\Book;
use Illuminate\Http\Request;
use App\Models\Room;

class SearchController extends Controller
{

    public function search(Request $request)
     {
       $from_date = $request->from_date;
       $to_date = $request->to_date;
      //  $roomIds = Book::pluck('room_id')->toArray();
      
      //   $rooms = Room::where(function($q1) use($roomIds,$to_date,$from_date){
      //     $q1->whereNotIn('id',$roomIds)
      //     ->whereBetween('created_at',[$from_date,$to_date]);
      //    })->get();
      $rooms=Book::select('room_id')->whereBetween('from_date',[date('m-d-Y',strtotime($request->from_date)),date('m-d-Y',strtotime($request->to_date))])
      ->orWhereBetween('to_date',[date('Y-m-d',strtotime($request->from_date)),date('Y-m-d',strtotime($request->to_date))])
      ->get();

  $room_ids=collect($rooms)->pluck('room_id')->toArray();

  $available=Room::whereNotIn('id',$room_ids)->get();
  // dd($available);
      
       return view('frontend.layouts.search-result',compact('available', 'from_date','to_date'));


     }


    
}
