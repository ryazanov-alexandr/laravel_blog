<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TokenMiddleware
{
    public function handle(Request $request, Closure $next, string $token)
    {
        dump($request);
        if($request->input('token') === $token) {
            return $next($request);
        }

        abort(403);
    }
}
