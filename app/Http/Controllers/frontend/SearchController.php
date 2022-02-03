<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Frontend\RoomController;
use App\Models\Book;
use App\Models\BookDetails;
use App\Models\Catagory;
use App\Models\Discount;
use App\Models\Gallary;
use Illuminate\Http\Request;
use App\Models\Room;

class SearchController extends Controller
{

  public function search(Request $request)
    {
      // dd(auth()->user());
      
        $from_date = $request->from_date;
      $to_date = $request->to_date;

      //  inserting data to session
      $request->session()->put([
        'from_date', $from_date,
        'to_date', $to_date
      ]);
      // end

    $book=Book::select('id')->whereBetween('from_date',[date('Y-m-d',strtotime($request->from_date)),date('Y-m-d',strtotime($request->to_date))])
      ->orWhereBetween('to_date',[date('Y-m-d',strtotime($request->from_date)),date('Y-m-d',strtotime($request->to_date))])
      ->get();

      $book_ids=collect($book)->pluck('id')->toArray();

      $rooms=BookDetails::select('room_id')->whereIn('book_id',$book_ids)->get();
      $room_ids=array_unique(collect($rooms)->pluck('room_id')->toArray());
      // dd(array_unique($room_ids));
        $available=Room::whereNotIn('id',$room_ids)->get();
    

      return view('frontend.layouts.search-result',compact('available', 'from_date','to_date','request'));
      
     
      
      

    }


    
}
