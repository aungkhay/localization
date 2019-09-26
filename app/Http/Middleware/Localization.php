<?php

namespace App\Http\Middleware;

use Closure;

use App;

use Request;

class Localization
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
        // if (session()->has('locale')) {
        //     App::setLocale(session()->get('locale'));
        // }

        $segment2 = Request::segment(2);
        App::setLocale($segment2);
        session()->put('locale', $segment2);

        return $next($request);
    }
}
