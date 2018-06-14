<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Log Channel
    |--------------------------------------------------------------------------
    |
    | This option defines the default log channel that gets used when writing
    | messages to the logs. The name specified in this option should match
    | one of the channels defined in the "channels" configuration array.
    |
    */

    'default' => 'stack',

    /*
    |--------------------------------------------------------------------------
    | Log Channels
    |--------------------------------------------------------------------------
    |
    | Here you may configure the log channels for your application. Out of
    | the box, Laravel uses the Monolog PHP logging library. This gives
    | you a variety of powerful log handlers / formatters to utilize.
    |
    | Available Drivers: "single", "daily", "slack", "syslog", "errorlog",
    |                     "monolog", "custom", "stack"
    |
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

        'homer' => [
            'driver' => 'daily',
            'path'   => storage_path('logs/homer.log'),
            'level'  => 'debug',
            'days'   => 7,
        ],

        'slack' => [
            'driver'   => 'slack',
            'url'      => 'http://webhook/',
            'username' => 'Lawoole Log',
            'emoji'    => ':boom:',
            'level'    => 'critical',
        ],

        'stderr' => [
            'driver'  => 'monolog',
            'handler' => Monolog\Handler\StreamHandler::class,
            'with'    => [
                'stream' => 'php://stderr',
            ],
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
