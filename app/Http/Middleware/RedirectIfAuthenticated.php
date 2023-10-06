<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\VarDumper\Caster\RedisCaster;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    // public function handle(Request $request, Closure $next, ...$guards)
    // {
    //     $guards = empty($guards) ? [null] : $guards;

    //     foreach ($guards as $guard) {
    //         if (Auth::guard($guard)->check()) {
    //             return redirect(RouteServiceProvider::HOME);
    //         }
    //     }

    //     return $next($request);
    // }
    // public function handle(Request $request, Closure $next, ...$guards, $guard = null)
    public function handle(Request $request, Closure $next, $guard = null)
    {
        // $guards = empty($guards) ? [null] : $guards;

        // foreach ($guards as $guard) {
        //     if (Auth::guard($guard)->check()) {
        //         // return redirect(RouteServiceProvider::HOME);
        //         if(Auth::user()->is_admin){
        //             return redirect('Admin/Home');
        //         }
        //         return redirect('User/Home');
        //     }
        //     return $next($request);
        // }

         if (Auth::guard($guard)->check())
            {
                if(Auth::user()->is_admin)
                {
                    return redirect('Admin/Home');
                }
                return redirect('User/Home');
            }
        return $next($request);
    }
}
