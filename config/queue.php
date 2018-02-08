<?php

return [

    /*
    |--------------------------------------------------------------------------
    | 默认队列驱动连接
    |--------------------------------------------------------------------------
    */

    'default' => 'sync',

    /*
    |--------------------------------------------------------------------------
    | 队列驱动连接
    |--------------------------------------------------------------------------
    */

    'connections' => [

        'sync' => [
            'driver' => 'sync',
        ],

        'database' => [
            'driver'      => 'database',
            'table'       => 'jobs',
            'queue'       => 'default',
            'retry_after' => 60,
        ],

        'beanstalkd' => [
            'driver'      => 'beanstalkd',
            'host'        => 'localhost',
            'queue'       => 'default',
            'retry_after' => 60,
        ],

        'sqs' => [
            'driver' => 'sqs',
            'key'    => 'your-public-key',
            'secret' => 'your-secret-key',
            'queue'  => 'your-queue-url',
            'region' => 'us-east-1',
        ],

        'redis' => [
            'driver'      => 'redis',
            'connection'  => 'default',
            'queue'       => 'default',
            'retry_after' => 60,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | 失败队列任务记录方式
    |--------------------------------------------------------------------------
    */

    'failed' => [
        'database' => 'mysql',
        'table'    => 'failed_jobs',
    ],

];
