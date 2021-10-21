<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // dd(auth()->user()->role=='Receptionist');
        if(auth()->user()->role=='admin'||auth()->user()->role=='Manager'||auth()->user()->role=='Receptionist')
        {
            return $next($request);
         }else
         {
             Auth::logout();
             return redirect()->route('home');
            return redirect()->back()->with('message','you dont have permission');
         }
        
    }
}
