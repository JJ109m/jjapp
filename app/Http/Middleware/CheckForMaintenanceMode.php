<?php

// app/Http/Middleware/CheckForMaintenanceMode.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode as BaseCheckForMaintenanceMode;

class CheckForMaintenanceMode extends BaseCheckForMaintenanceMode
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
        if ($this->app->isDownForMaintenance()) {
            return response()->view('errors.offline', [], 503);
        }

        return parent::handle($request, $next);
    }
}
