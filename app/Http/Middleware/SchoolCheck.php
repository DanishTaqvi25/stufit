<?php

namespace App\Http\Middleware;

use Closure;

class SchoolCheck
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
		if(!$request->session()->has('school_id')){
		 $request->session()->flash('error','Access Denied');
		    return redirect('school-login');
	}
        return $next($request);
    }
	
}
