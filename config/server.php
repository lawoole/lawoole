<?php

return [

    /*
    |--------------------------------------------------------------------------
    | 服务驱动类型
    |--------------------------------------------------------------------------
    */

    'driver' => 'http',

    /*
    |--------------------------------------------------------------------------
    | 服务选项
    |--------------------------------------------------------------------------
    */

    'options' => [
        'log_level'       => 0,
        'worker_num'      => 16,
        'task_worker_num' => 16,
    ],

    /*
    |--------------------------------------------------------------------------
    | 监听配置
    |--------------------------------------------------------------------------
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
