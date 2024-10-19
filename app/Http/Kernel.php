<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /*protected $middleware = [
        // Global HTTP middleware
        \App\Http\Middleware\LogRequests::class, // Register LogRequests as global middleware
    ];*/

    protected $routeMiddleware = [
        'check.role' => \App\Http\Middleware\CheckRole::class,
    ];
    
}