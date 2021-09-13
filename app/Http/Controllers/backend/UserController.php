<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function customerlist()
    {
        $user=User::where('role','=','customer')->get();
        return view('backend.layouts.customer',compact('user'));

    }
    public function userlist()
    {
        $user=User::where('role','!=','customer')->get();
        return view('backend.layouts.user.user',compact('user'));

    }
    //user delete
    public function delete($id)
    {
        $staff=User::find($id);
        if($staff)
        {
            $staff->delete();
            return redirect()->back()->with('message','delete successfully');
        }
        return redirect()->back()->with('message','no user found');
    }

    public function login()
    {
         return view('backend.layouts.login');
    }
    
    public function loginpost(Request $request)
    { 
         $credentials=$request->except('_token');
    
        // dd($request->all());
    //   dd( $credentials);
      if(Auth::attempt( $credentials))
      {

        if(auth()->user()->role=='admin'||auth()->user()->role=='Manager'||auth()->user()->role=='Receptionist')
        {
            return redirect()->route('master');
         }else
         {
             Auth::logout();
             return redirect()->route('home');
         }
        //   dd(auth()->user());
        
      }

         return redirect()->back()->with('message','invalid user info');
    }
    public function logout()
    {
         Auth::logout();
         return redirect()->route('admin.login');
    }
    
}
