<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Support\Facades\Hash;

class IsAdmin
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
        if((Auth::user()->email !== 'admin@mail.ru'&& Hash::check('1' , Auth::user()->getAuthPassword()) !== true)){
            return redirect('/');
        }
        return $next($request);
    }
}
