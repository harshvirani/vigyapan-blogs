<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RequestTrack
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $ipAddress = $request->ip();
        \Log::info("IP ADDRESS====".$ipAddress);
        \Log::info("PATH====".$request->getPathInfo());
        \Log::info("PATH====".json_encode($request->all()));
        return $next($request);
    }
}
