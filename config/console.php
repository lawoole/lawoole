<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Console Commands
    |--------------------------------------------------------------------------
    |
    | Here we can use a more comfortable way to register custom commands, all
    | the commands configured here can be used in the Artisan console.
    |
    */

    'commands' => [

        App\Console\EchoServerCommand::class,
        App\Console\GetServerTimeCommand::class,
        App\Console\ThrowExceptionCommand::class,

    ],

    /*
    |--------------------------------------------------------------------------
    | Schedule Tasks
    |--------------------------------------------------------------------------
    |
    | Scheduled tasks can also be defined by configuration. Although not all
    | the attributes can be defined here, but they can cover most usage
    | scenarios. If you just need to define the scheduled tasks simply, it is
    | a good idea to define here.
    |
    */

    'schedules' => [

    ]

];
