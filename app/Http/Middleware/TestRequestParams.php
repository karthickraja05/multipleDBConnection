<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TestRequestParams
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
        if(!$request->has('database')){
            return redirect('home')->with('status','Something Went Wrong');
        }
        $allowed_database = ['mysql3','mysql2'];
        if(!in_array($request->database, $allowed_database) ){
            return redirect('home')->with('status','Invalid Database');
        }
        
        return $next($request);
    }
}
