<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class mrafterlogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Session()->has('mr_id'))
		{
			
		}
		else
		{
			return redirect('mr');
		}
        return $next($request);
    }
}
