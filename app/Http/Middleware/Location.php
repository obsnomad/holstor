<?php

namespace App\Http\Middleware;

use App\Services\Locations;
use Closure;

class Location
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $location = null;
        $params = array_filter(explode('.', str_replace(env('APP_DOMAIN'), '', $request->getHost())));
        if($params && ($location = $params[0]) || ($location = cookie('location'))) {
            $location = strtr($location, Locations::getCodesList()->toArray());
            if(in_array($location, Locations::getCodesList('all')->toArray()) && $location != cookie('location')) {
                return redirect(str_replace($request->getHost(), env('APP_DOMAIN'), $request->fullUrl()))
                    ->withCookie(\Cookie::make('location', $location, 0, null, '.' . env('APP_DOMAIN'), false, false));
            }
        }
        return $next($request);
    }
}
