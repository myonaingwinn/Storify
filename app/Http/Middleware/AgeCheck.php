<?php

namespace App\Http\Middleware;

use Closure;

class AgeCheck
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
        // echo "<h1>This is AgeCheck Middleware</h1>";
        if ($request->age && $request->age < 18)
            return redirect('who');

        return $next($request);
    }
}
