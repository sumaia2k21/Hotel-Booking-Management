<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckReceptionist
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
        if(auth()->user()->role=='Receptionist'||auth()->user()->role=='admin')
        {
            return $next($request);
        }
        else
        {
            return redirect()->back()->with('message','you donot have permission');
        }
        
    }
}
