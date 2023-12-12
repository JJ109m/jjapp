<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ThemeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

    public function handle($request, Closure $next)
    {
        $theme = auth()->check() ? auth()->user()->theme : config('app.default_theme');

        // Almacena el tema en la sesión o en una cookie, según tu preferencia.
        session(['theme' => $theme]);

        return $next($request);
    }
}
