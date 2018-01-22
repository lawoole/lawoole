<?php

return [

    /*
    |--------------------------------------------------------------------------
    | 默认缓存存储器
    |--------------------------------------------------------------------------
    */

    'default' => 'file',

    /*
    |--------------------------------------------------------------------------
    | 缓存存储器
    |--------------------------------------------------------------------------
    */

    'stores' => [

        'apc' => [
            'driver' => 'apc',
        ],

        'array' => [
            'driver' => 'array',
        ],

        'database' => [
            'driver'     => 'database',
            'table'      => 'cache',
            'connection' => null,
        ],

        'file' => [
            'driver' => 'file',
            'path'   => storage_path('framework/cache'),
        ],

        'memcached' => [
            'driver'        => 'memcached',
            'persistent_id' => '',
            'sasl'          => ['username', 'password'],

            'options' => [
                // Memcached::OPT_CONNECT_TIMEOUT  => 2000,
            ],

            'servers' => [
                [
                    'host' => '127.0.0.1',
                    'port' => 11211,
                    'weight' => 100,
                ],
            ],
        ],

        'redis' => [
            'driver'     => 'redis',
            'connection' => 'default',
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | 缓存前缀
    |--------------------------------------------------------------------------
    */

    'prefix' => 'lawoole_cache',

];
