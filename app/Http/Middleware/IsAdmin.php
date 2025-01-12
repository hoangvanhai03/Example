<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

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
        // Kiểm tra nếu người dùng đã đăng nhập và có vai trò là 'admin'
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request); // Cho phép tiếp tục xử lý request
        }

        // Nếu không phải admin, chuyển hướng về trang lỗi hoặc từ chối truy cập
        return redirect('/')->with('error', 'Bạn không có quyền truy cập vào trang này.');
    }
}
