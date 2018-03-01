<?php

return [

    /*
    |--------------------------------------------------------------------------
    | 默认数据库连接
    |--------------------------------------------------------------------------
    */

    'default' => 'default',

    /*
    |--------------------------------------------------------------------------
    | 数据库连接
    |--------------------------------------------------------------------------
    */

    'connections' => [

        'sqlite' => [
            'driver'   => 'sqlite',
            'database' => storage_path('database/lawoole.sqlite'),
            'prefix'   => '',
        ],

        'mysql' => [
            'driver'      => 'mysql',
            'host'        => '127.0.0.1',
            'port'        => 3306,
            'database'    => 'forge',
            'username'    => 'forge',
            'password'    => '',
            'unix_socket' => '',
            'charset'     => 'utf8mb4',
            'collation'   => 'utf8mb4_unicode_ci',
            'prefix'      => '',
            'strict'      => true,
            'engine'      => null,
        ],

        'pgsql' => [
            'driver'   => 'pgsql',
            'host'     => '127.0.0.1',
            'port'     => 5432,
            'database' => 'forge',
            'username' => 'forge',
            'password' => '',
            'charset'  => 'utf8',
            'prefix'   => '',
            'schema'   => 'public',
            'sslmode'  => 'prefer',
        ],

        'sqlsrv' => [
            'driver'   => 'sqlsrv',
            'host'     => '127.0.0.1',
            'port'     => 1433,
            'database' => 'forge',
            'username' => 'forge',
            'password' => '',
            'charset'  => 'utf8',
            'prefix'   => '',
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | 数据库结构维护工具使用表名
    |--------------------------------------------------------------------------
    */

    'migrations' => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Redis
    |--------------------------------------------------------------------------
    */

    'redis' => [
        'client' => 'predis',

        'default' => [
            'host'     => '127.0.0.1',
            'password' => null,
            'port'     => 6379,
            'database' => 0,
        ],
    ],

];
