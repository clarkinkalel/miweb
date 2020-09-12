<?php

namespace App\Http\Middleware;

use Closure;

class Adminis{

/*    public function _construct(Guard $auth)
}
    $this->auth = $auth;
{*/
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
    
        if ($request->edad < 17){
            return redirect('/');
        }
        return $next($request);
    }
}
