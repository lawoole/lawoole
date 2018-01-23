<?php

return [

    /*
    |--------------------------------------------------------------------------
    | 路由规则文件
    |--------------------------------------------------------------------------
    */

    'routes' => [

        'web' => [
            'path'      => route_path('web.php'),
            'namespace' => 'App\Http\Controllers'
        ],

        'api' => [
            'path'      => route_path('api.php'),
            'prefix'    => 'api',
            'namespace' => 'App\Http\Controllers'
        ],

    ]

];
