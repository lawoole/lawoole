<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Global Middleware
    |--------------------------------------------------------------------------
    |
    | The application's global HTTP middleware stack. These middleware are run
    | during every HTTP request to your application.
    |
    */

    'middleware' => [

    ],

    /*
    |--------------------------------------------------------------------------
    | Route Middleware
    |--------------------------------------------------------------------------
    |
    | The application's route middleware. These middleware may be assigned to
    | groups or used individually.
    |
    */

    'route_middleware' => [

    ],

    /*
    |--------------------------------------------------------------------------
    | Route Middleware Groups
    |--------------------------------------------------------------------------
    |
    | The application's route middleware groups.
    |
    */

    'middleware_groups' => [

    ],

    /*
    |--------------------------------------------------------------------------
    | Root Controller Namespace
    |--------------------------------------------------------------------------
    |
    | The class or namespace we define in the route will be based on the root
    | controller namespace. This configuration can help us to define routes
    | more simply and clearly.
    |
    */

    'namespace' => 'App\Http\Controllers',

    /*
    |--------------------------------------------------------------------------
    | Route Rules
    |--------------------------------------------------------------------------
    |
    | Here we can provide multiple route definitions. Usually we will use
    | route files to define routes, and here we just give their path.
    |
    */

    'routes' => [

        'web' => [
            'path' => route_path('web.php'),
        ],

    ]

];
