<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
//        if (Auth::check()){
//
//            if(Auth::user()->Editor()){
//
//                return $next($request);
//
//            }
//            else {
//                return redirect('/')->with('message','Access Denied as you are not Admin!');
//            }
//        }
//        else
//        {
//            return redirect('/login')->with('message','login to access the website info');
//
//        }
    }
}
