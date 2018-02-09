<?php
namespace App\Http\Controllers;

use App\Tasks\CalculateTask;
use App\Tasks\CalculateTimeoutTask;
use Lawoole\Application;
use Lawoole\Routing\Controller;
use Lawoole\Routing\FutureResponse;
use Lawoole\Routing\RequestManager;
use Lawoole\Support\Facades\Server;

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

        $task = new CalculateTask($addend, $summand);
        $task->withRequestManager($requestManager);

        Server::pushTask($task);

        return new FutureResponse($requestManager);
    }

    /**
     * 异步任务超时显示
     *
     * @param \Lawoole\Routing\RequestManager $requestManager
     *
     * @return mixed
     */
    public function asyncTaskTimeout(RequestManager $requestManager)
    {
        $request = $requestManager->getRequest();

        $addend = $request->get('addend', 1);
        $summand = $request->get('summand', 2);

        $task = new CalculateTimeoutTask($addend, $summand);
        $task->withRequestManager($requestManager);

        Server::pushTask($task);

        return new FutureResponse($requestManager, 1.0);
    }

    /**
     * 获得接口版本
     *
     * @param \Lawoole\Application $app
     *
     * @return array
     */
    public function getApiVersion(Application $app)
    {
        return [
            'version' => $app->version()
        ];
    }
}
