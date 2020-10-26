<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RequireAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
       } else {
            $access = Auth::user()['level'];
            if ($access != 2) {
                 abort(403, 'Bạn không có quyền truy cập vào đường dẫn này!');
            }
       }

       return $next($request);
    }
}
