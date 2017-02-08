<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class AdminAuthorization
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
        if ($request->user()->is_admin) {
            return $next($request);
        }
        else {
            return Response::create('Forbidden', 403);
        }
    }
}
