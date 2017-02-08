<?php

namespace App\Http\Middleware;

use Closure;
use \Illuminate\Http\Request;
use \Illuminate\Http\Response;

class UserAuthorization
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
        if ($this->isCurrentUser($request) || $this->isAdmin($request)) {
            return $next($request);
        } 
        else {
            return Response::create('Forbidden', 403); 
        }
    }

    private function isCurrentUser(Request $request)
    {
        return $request->route('user_id') == $request->user()->id;
    } 

    private function isAdmin(Request $request)
    {
        return $request->user()->is_admin;
    }
}
