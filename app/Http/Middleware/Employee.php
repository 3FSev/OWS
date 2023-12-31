<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Employee
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check() && Auth::user()->role_id == '1'){
            return $next($request);
        }
        elseif(Auth::check() && Auth::user()->role_id == '2'){
            return redirect('admin/adm-dashboard');
        }
        elseif(Auth::check() && Auth::user()->role_id == '3'){
            return redirect('sup-dashboard');
        }
        else{
            return redirect('man-dashboard');
        }
    }
}
