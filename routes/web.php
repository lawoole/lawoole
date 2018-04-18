<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| 路由规则
|--------------------------------------------------------------------------
*/

Route::get('', 'HomeController@index');

Route::get('homer', 'HomeController@homer');
