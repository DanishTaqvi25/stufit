<?php

namespace App\Http\Middleware;

use Closure;

class EmployCheck
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
		if(!$request->session()->has('employ_id')){
		 $request->session()->flash('error','Access Denied');
		    return redirect('employ-login');
	}
        return $next($request);
    }
	
}
