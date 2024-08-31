<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

// TODO: For handling whether the current user has filled the admission or not;
// if yes, don't allow the current user to visit the admission pages with this middleware;
// otherwise, allow them.
class AdmissionFilled
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // condition here

        return $next($request);
    }
}
