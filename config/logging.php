<?php

return [

    /*
    |--------------------------------------------------------------------------
    | 默认日志频道
    |--------------------------------------------------------------------------
    */

    'default' => 'stack',

    /*
    |--------------------------------------------------------------------------
    | 日志频道定义
    |--------------------------------------------------------------------------
    */

    'channels' => [

        'stack' => [
            'driver'   => 'stack',
            'channels' => ['single'],
        ],

        'single' => [
            'driver' => 'single',
            'path'   => storage_path('logs/lawoole.log'),
            'level'  => 'debug',
        ],

        'daily' => [
            'driver' => 'daily',
            'path'   => storage_path('logs/lawoole.log'),
            'level'  => 'debug',
            'days'   => 7,
        ],

        'slack' => [
            'driver'   => 'slack',
            'url'      => 'http://webhook/',
            'username' => 'Laravel Log',
            'emoji'    => ':boom:',
            'level'    => 'critical',
        ],

        'syslog' => [
            'driver' => 'syslog',
            'level'  => 'debug',
        ],

        'errorlog' => [
            'driver' => 'errorlog',
            'level'  => 'debug',
        ],

    ],

];
