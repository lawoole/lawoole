<?php

/*
|--------------------------------------------------------------------------
| 创建应用服务容器对象实例
|--------------------------------------------------------------------------
*/

$app = new Lawoole\Application(
    realpath(__DIR__.'/../')
);

/*
|--------------------------------------------------------------------------
| 绑定关键实体
|--------------------------------------------------------------------------
*/

// $app->singleton(
//     Illuminate\Contracts\Http\Kernel::class,
//     App\Http\Kernel::class
// );
//
// $app->singleton(
//     Illuminate\Contracts\Console\Kernel::class,
//     App\Console\Kernel::class
// );
//
// $app->singleton(
//     Illuminate\Contracts\Debug\ExceptionHandler::class,
//     App\Exceptions\Handler::class
// );

/*
|--------------------------------------------------------------------------
| 返回应用对象实例
|--------------------------------------------------------------------------
*/

return $app;
