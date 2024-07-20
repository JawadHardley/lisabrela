<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Tax
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // return $next($request);

        if (!Auth::check()) {
            return redirect('/');
        }

        if (Auth::user()->role == 'gvt') {
            return redirect()->route('gvt');
        }

        if (Auth::user()->role == 'applicant') {
            return redirect()->route('applicant');
        }

        if (Auth::user()->role == 'tax') {
            return $next($request);
        }
        
        if (Auth::user()->role == 'admin') {
            return redirect()->route('admin');
        }

    }
}