<?php

return [
    /*
    |--------------------------------------------------------------------------
    | 控制台命令
    |--------------------------------------------------------------------------
    */

    'commands' => [
        App\Console\Commands\ServerStatusCommand::class,

        App\Console\Schedules\ClockSchedule::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | 定时任务定义文件
    |--------------------------------------------------------------------------
    */

    'schedules' => [

        'click' => [
            'type'    => 'command',
            'command' => App\Console\Schedules\ClockSchedule::class,
            'cron'    => '* * * * *'
        ],

    ]
];
