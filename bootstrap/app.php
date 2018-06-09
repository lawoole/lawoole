<?php

/*
|--------------------------------------------------------------------------
| 创建应用服务容器对象实例
|--------------------------------------------------------------------------
*/

$app = new Lawoole\Foundation\Application(
    realpath(__DIR__.'/../')
);

/*
|--------------------------------------------------------------------------
| 绑定关键实体
|--------------------------------------------------------------------------
*/

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    Lawoole\Foundation\Console\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    Lawoole\Foundation\Exceptions\Handler::class
);

/*
|--------------------------------------------------------------------------
| 返回应用对象实例
|--------------------------------------------------------------------------
*/

return $app;
