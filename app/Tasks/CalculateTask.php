<?php
namespace App\Tasks;

use Lawoole\Application;
use Lawoole\Routing\BindRequestManager;
use Lawoole\Task\Task;

class CalculateTask extends Task
{
    use BindRequestManager;

    /**
     * 加数
     *
     * @var int
     */
    protected $addend;

    /**
     * 被加数
     *
     * @var int
     */
    protected $summand;

    /**
     * @var
     */
    protected $result;

    /**
     * 创建计算任务
     *
     * @param int $addend
     * @param int $summand
     */
    public function __construct($addend, $summand)
    {
        $this->addend = $addend;
        $this->summand = $summand;
    }

    /**
     * 任务处理过程
     */
    public function handle()
    {
        $this->result = $this->addend + $this->summand;
    }

    /**
     * 完成任务过程
     *
     * @param \Lawoole\Application $app
     */
    public function finish(Application $app)
    {
        $requestManager = $this->getRequestManager($app);

        if ($requestManager) {
            $requestManager->sendResponse(view('calculator', [
                'addend'  => $this->addend,
                'summand' => $this->summand,
                'result'  => $this->result
            ]));
        }
    }
}
