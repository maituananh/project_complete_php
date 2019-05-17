<?php

namespace App\Http\Middleware;

use Closure;

class JwtMiddleware
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
        //return $next($request);
        try {
            $user = JWTAuth::toUser($request->input('token'));

        } catch (\Exception $e) {
            if ($e instanceof TokenInvalidException) {
                return $next($request);
                return response()->json(['error'=>'Token is Invalid']);
            } else if ($e instanceof TokenExpiredException){
                return $next($request);
                return response()->json(['error'=>'Token is Expired']);
            } else {
                return $next($request);
                return response()->json(['error'=>'Something is wrong']);
            }
        }

        return $next($request);
    }
}
