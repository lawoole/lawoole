<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Server Driver
    |--------------------------------------------------------------------------
    |
    | Swoole provides us rich types of web server implementation, we can choose
    | one of them as the base driver of the server.
    |
    | Available Drivers: "tcp", "http", "web_socket"
    |
    */

    'driver' => 'http',

    /*
    |--------------------------------------------------------------------------
    | Unix Sock File
    |--------------------------------------------------------------------------
    |
    | By default, the server will create a unix sock file and listen to it,
    | we can use this file to control the server.
    |
    */

    'unix_sock' => storage_path('framework/server.sock'),

    /*
    |--------------------------------------------------------------------------
    | Server Options
    |--------------------------------------------------------------------------
    |
    | The configurations of the Swoole server.
    |
    | See https://www.swoole.co.uk/docs/modules/swoole-server/configuration
    |
    */

    'options' => [

        /*
        |--------------------------------------------------------------------------
        | Worker Process
        |--------------------------------------------------------------------------
        */

        'worker_num'      => 16,

        'task_worker_num' => 16,

        /*
        |--------------------------------------------------------------------------
        | Event Logs And Slow Logs
        |--------------------------------------------------------------------------
        */

        'log_level' => 2,

        'log_file' => storage_path('logs/swoole.log'),

        'request_slowlog_timeout' => 5,

        'request_slowlog_file' => storage_path('logs/swoole-slow-trace.log'),

        'trace_event_worker' => true,

        /*
        |--------------------------------------------------------------------------
        | Request Handler
        |--------------------------------------------------------------------------
        */

        'max_request' => 1000,

        'reload_async' => true,

    ],

    /*
    |--------------------------------------------------------------------------
    | Port Listens
    |--------------------------------------------------------------------------
    |
    | We can listen on multiple ports at the same time via the Swoole server,
    | they can use different protocols. We can use different event handlers to
    | handle the events they generate. For example, we can handle Http requests
    | and Homer callings in the same server.
    |
    */

    'listens' => [
        [
            'protocol' => 'http',
            'host'     => '0.0.0.0',
            'port'     => 8080,
            'handler'  => Lawoole\Http\HttpServerSocketHandler::class,
        ],
        [
            'protocol' => 'whisper',
            'host'     => '0.0.0.0',
            'port'     => 8081,
            'handler'  => Lawoole\Homer\Transport\Whisper\WhisperServerSocketHandler::class,
        ],
        [
            'protocol' => 'http',
            'host'     => '0.0.0.0',
            'port'     => 8082,
            'handler'  => Lawoole\Homer\Transport\Http\HttpServerSocketHandler::class,
        ]
    ],

];
