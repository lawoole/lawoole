<?php
namespace App\Http\Controllers;

use App\Services\Contracts\Ping;
use Lawoole\Contracts\Foundation\Application;
use Lawoole\Routing\Controller;

class HomeController extends Controller
{
    /**
     * 首页
     *
     * @param \Lawoole\Contracts\Foundation\Application $app
     *
     * @return mixed
     */
    public function index(Application $app)
    {
        return $app->make(Ping::class)->ping('hello');
    }
}
