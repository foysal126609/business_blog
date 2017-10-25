<?php

namespace App\Http\Middleware;

use App\Customer;
use Closure;

class CustomerMiddleware
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
        if ( Customer::check())
        return $next($request);
        else
            return redirect('/')->with('message','please login');
    }
}
