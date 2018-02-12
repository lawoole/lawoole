<?php

/*
|--------------------------------------------------------------------------
| 路由规则
|--------------------------------------------------------------------------
*/

$router->get('', 'HomeController@index');

$router->get('task', [
    'uses' => 'HomeController@asyncTask'
]);

$router->get('timeout', [
    'uses' => 'HomeController@asyncTaskTimeout'
]);

$router->get('step', [
    'uses' => 'HomeController@stepResponse'
]);
