<?php

namespace App\Http\Middleware;

use Closure;

class Subscriber
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
        if(auth()->check()){
            
            $role = auth()->user()->role;

            if($role == 'subscriber' || $role == 'admin')
                return $next($request);
            
            else
            return redirect('/subscriberredirect');

        }

        return redirect('/subscriberredirect');
        
        
    }
}
