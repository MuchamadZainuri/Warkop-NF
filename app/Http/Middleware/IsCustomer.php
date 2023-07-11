<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Redirect;

class IsCustomer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // jika belum login dan role bukan customer maka akan diarahkan ke halaman login
        if (!Auth::check()) {
            return Redirect::route('login')->with('error', 'You must be logged in to access this page.');
        }
        // jika bukan customer maka akan diarahkan ke halaman itu sendiri
        elseif ($request->user()->hasRole('admin')) {
            # code...
            return Redirect::back()->with('error', 'Unauthorized access.');
        } 
        return $next($request);
        
    }
}
