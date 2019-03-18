<?php

namespace App\Http\Middleware;

use Closure;
use DB;
use DateTime;

class LogMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        DB::table('logs')->insert([
            'path' => $request->path(),
            'ip' => $request->getClientIp(true),
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ]);

        return $response;
    }
}
