<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $middleware = [
        \App\Http\Middleware\AddSecurityHeaders::class,
        // existing middleware (if Muhammad has any, you'll add later)
    ];

    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\AddSecurityHeaders::class,
            // other middleware...
        ],
        'api' => [
            'throttle:api',
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ];

    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        // more middleware...
    ];
}
