<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class checkAdminLogin
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
        // nếu user đã đăng nhập
        if (Auth::check())
        {
            $user = Auth::user();
            // nếu level =1 (admin), status = 1 (actived) thì cho qua.
            if ($user->role === "admin" )
            {
                return $next($request);
            }
        }

        return redirect('trang-chu');
    }
}
