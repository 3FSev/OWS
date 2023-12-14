<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check() && Auth::user()->role_id == '2' || Auth::user()->role_id == '3'){
            return $next($request);
        }
        elseif(Auth::check() && Auth::user()->role_id == '4'){
            return redirect('manager/man-stock-list');
        }
        else{
            return redirect('employee/em-pending-wiv');
        }
    }
}
