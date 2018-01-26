<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;

class ServerStatusCommand extends Command
{
    /**
     * 命令名
     *
     * @var string
     */
    protected $signature = 'server:status';

    /**
     * 命令描述
     *
     * @var string
     */
    protected $description = 'Get the Swoole server\'s status';

    /**
     * 执行命令
     */
    public function handle()
    {
        $name = $this->laravel->name();
        $runtimeFile = $this->laravel->storagePath('framework/server.runtime');

        if (file_exists($runtimeFile)) {
            $data = json_decode(file_get_contents($this->laravel->storagePath('framework/server.runtime')), true);

            $this->info("{$name} server is running in process {$data['pid']}.");

            return;
        }

        $this->info("{$name} server is not run.");
    }
}
