<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdminMiddleware
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
        $role = Auth::check() ? Auth::user() : null;
        if ($role->user_type != 'ADMIN') {
            toastr()->error('Oops! You Are Not LoggedIn As An Admin, Please Try Again With Admin Account');
            return redirect()->back();
        }
        return $next($request);
    }
}
