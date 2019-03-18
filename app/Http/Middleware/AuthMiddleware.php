<?php

namespace App\Http\Middleware;

use Closure;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->has('token')) {
            if ($request->get('token') == 'laravel-expert') {
                return $next($request);
            }
            return response('Token salah', 403);
        }
        return response('Token tidak diisi', 403);
    }
}

