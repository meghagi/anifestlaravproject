<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Adminmiddelware
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
       
        if (Auth::check())
        {
        if (Auth::user()->role === 'admin') 
        {
            return $next($request);
        } else 
        {
            return redirect()->route('index')->with('status', 'Acess denied you are not admin');
        }
       }
        else
        {
            return redirect()->route('login')->with('status', 'Please login');
  
        }
        }
    }
