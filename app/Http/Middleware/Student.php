<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Student
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->user()->is_admin) {
            return redirect()->route('adminHome');
        }
        $user = $request->user();
        $request->user()->is_admin = $user->is_admin;
        $request->merge(['user' => $user]);

        return $next($request);
    }
}
