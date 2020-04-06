<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class postOwner
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
        $data = User::find($id);

        if(auth()->user()->id == $data){
            return $next($request);
    
        }

        else
            return redirect('/');
    }
            
}
