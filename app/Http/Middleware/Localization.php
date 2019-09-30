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
        $segment = Request::segment(1);

        if(in_array($segment, config('app.locales'))) {
            App::setLocale($segment);
            session()->put('locale', $segment);
        } else {
            App::setLocale('mm');
            session()->put('locale', 'mm');
        }

        return $next($request);
    }
}
