<?php

namespace App\Http\Middleware;
use Auth;

use Closure;

class KajurMiddleware
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
        foreach (Auth::user()->role as $role) {
            
            if ($role->name == 'Ketua Jurusan') {
                
                return $next($request);
            }
        }

    return redirect('');
        
    }
}
