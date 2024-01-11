<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerMiddleware
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
        if ($role->user_type != 'USER' || $role->status != 'ACTIVE') {
            toastr()->error('Oops! Your Account Is Not Active Please Contact With Admin');
            return redirect()->route('customer.login');
        }
        return $next($request);
    }
}
