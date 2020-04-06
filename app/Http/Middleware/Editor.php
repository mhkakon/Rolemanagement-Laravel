<?php

namespace App\Http\Middleware;

use Closure;


class Editor
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

            if($role == 'editor' || $role == 'admin')
                return $next($request);
            
            else
            return redirect('/editorredirect');

        }

        return redirect('/editorredirect');
    }
}
