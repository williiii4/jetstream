<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class CheckLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //App::setlocale(session()->get('locale', 'en'));

        if (Session::has('language')) {
            if (App::getLocale()!= Session::get('language')) {
             App::setLocale(Session::get('language'));
            }
          }else {
             Session::put('language', 'es');
             App::setLocale('es');
         }

        return $next($request);
    }
}
