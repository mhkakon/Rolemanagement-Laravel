<?php

namespace App\Http\Middleware;

use Closure;

class Registerd
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
        
        if(!auth()->check()){
            echo "Please Log in";
            return redirect('/registerdredirect');
        }
        
        
        return $next($request);
    }
}
