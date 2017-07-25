<?php

namespace App\Http\Middleware;

use Closure;

class homeloginMiddleware
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
         if(!session('slave'))
        {
            return redirect('/home/login')->with(['info'=>'尚未登录']);
        }
        return $next($request);
       
        }
    }
