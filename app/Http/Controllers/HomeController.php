<?php
namespace App\Http\Controllers;

use App\Tasks\CalculateTask;
use Lawoole\Routing\Controller;
use Lawoole\Routing\RequestManager;

/**
 * Class HomeController
 *
 * @author You Ming
 */
class HomeController extends Controller
{
    /**
     * 首页
     *
     * @return mixed
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * 异步任务演示
     *
     * @param \Lawoole\Routing\RequestManager $requestManager
     *
     * @return mixed
     */
    public function asyncTask(RequestManager $requestManager)
    {
        $request = $requestManager->getRequest();

        $addend = $request->get('addend', 1);
        $summand = $request->get('summand', 2);

        return $this->pushTask(new CalculateTask($addend, $summand));
    }
}
