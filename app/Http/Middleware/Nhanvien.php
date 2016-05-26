<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Nhanvien
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
        if(!Auth::check() or $request->user()->role!='nhanvien') {
            if($request->user()->role != 'admin'){
                return redirect('unauthorized');
            }
            return $next($request);
        }
        return $next($request);
    }
}
