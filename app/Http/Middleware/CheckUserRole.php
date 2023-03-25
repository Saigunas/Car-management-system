<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckUserRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (!$request->user() || $request->user()->role != $role) {
            return redirect()->route('dashboard'); // or some other error response
        }

        return $next($request);
    }
}
