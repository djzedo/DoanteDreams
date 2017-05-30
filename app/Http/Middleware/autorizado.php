<?php

namespace App\Http\Middleware;
use App\User;
use Closure;
use Redirect;
use Auth;

class autorizado
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
        $id = $request->route()->parameters('users');
        foreach ($id as $key => $value) {
}
        
        if (Auth::id() !== (int)$value)
        {
            return redirect('users');
        }
        
        return $next($request);
    }
}
