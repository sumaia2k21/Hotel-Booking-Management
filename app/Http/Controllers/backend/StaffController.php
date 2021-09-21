<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
  public function staff()
  {
      return view('backend.layouts.staff.add_staff');
  }
  public function staffpost(Request $request)
  {
    // dd(request());
    Staff::Create([
      'name'=>$request->name,
      'role'=>$request->role,
      'email'=>$request->email,
      'password'=>bcrypt($request->password),
      'mobile'=>$request->mobile
      
                
 
 
      ]);
      return redirect()->route('user.list');
  }


}
