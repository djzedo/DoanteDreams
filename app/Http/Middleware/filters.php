<?php

namespace App\Http\Middleware;
use App\User;
use Closure;
use Redirect;

class filters
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
        $id = $request->route()->parameters();
        $user = User::find($id);
        if ($user == null)
        {
            return redirect('users');
        } 
        return $next($request);
        //return $next($request);
            //return $next($request);
    }
}
