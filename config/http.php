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
    */

    'middleware_groups' => [

    ],

    /*
    |--------------------------------------------------------------------------
    | Root Controller Namespace
    |--------------------------------------------------------------------------
    */

    'namespace' => 'App\Http\Controllers',

    /*
    |--------------------------------------------------------------------------
    | Route Rules
    |--------------------------------------------------------------------------
    */

    'routes' => [

        'web' => [
            'path' => route_path('web.php'),
        ],

        'api' => [
            'path'       => route_path('api.php'),
            'prefix'     => 'api',
            'middleware' => []
        ],

    ]

];
