<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider automatically. Now create
| something great!
|
*/

Route::get('/', 'HomeController@welcome');

Route::get('/websocket', 'HomeController@websocket');
