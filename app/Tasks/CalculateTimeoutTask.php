<?php
namespace App\Tasks;

class CalculateTimeoutTask extends CalculateTask
{
    /**
     * 任务处理过程
     */
    public function handle()
    {
        parent::handle();

        // 模拟超时
        sleep(2);
    }
}
