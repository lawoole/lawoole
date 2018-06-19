<?php
namespace App\Console;

use App\Services\EchoServiceInterface;
use Illuminate\Console\Command;

class GetServerTimeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'server:time';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get the server time';

    /**
     * Execute the command.
     *
     * @param \App\Services\EchoServiceInterface $echoService
     */
    public function handle(EchoServiceInterface $echoService)
    {
        $serverTime = $echoService->ping();

        $this->info("The server time is {$serverTime} now.");
    }
}
