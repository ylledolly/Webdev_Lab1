<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class CheckRole
{
    /**
     * Handle an incoming request.
     *
      * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        
        // Retrieve the user's name from the request
        $name = $request->input('name');

        // Check if the name matches the allowed names
        if ($name === 'Karylle' || $name === 'Azore') {
            // Redirect to the homepage
            return redirect('welcome');
        }
        // If the name doesn't match, redirect to access denied
        return redirect('/accessDenied');
    }
}
