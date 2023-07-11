<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check() && $request->user()->hasRole('admin'))  {
            return $next($request);
        }
        return Redirect::back()->with('error', 'Unauthorized access.');
    }
}
