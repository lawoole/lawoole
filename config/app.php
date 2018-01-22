<?php

return [

   /*
   |--------------------------------------------------------------------------
   | 调试模式
   |--------------------------------------------------------------------------
   */

    'debug' => false,

    /*
    |--------------------------------------------------------------------------
    | 运行环境
    |--------------------------------------------------------------------------
    */

    'environment' => 'product',

    /*
    |--------------------------------------------------------------------------
    | 时区
    |--------------------------------------------------------------------------
    */

    'timezone' => 'PRC',

    /*
    |--------------------------------------------------------------------------
    | 服务提供者
    |--------------------------------------------------------------------------
    */

    'providers' => [
        Illuminate\Cache\CacheServiceProvider::class,
        Illuminate\Database\DatabaseServiceProvider::class,
        Illuminate\Filesystem\FilesystemServiceProvider::class,

        Lawoole\Providers\ConsoleServiceProvider::class,
        Lawoole\Providers\RouteServiceProvider::class,
        Lawoole\Providers\ScheduleServiceProvider::class,
        Lawoole\Routing\RoutingServiceProvider::class,
    ]

];
