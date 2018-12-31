<?php
namespace App\Console;

use App\Services\EchoServiceInterface;
use Illuminate\Console\Command;

class ThrowExceptionCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'server:exception';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test server exception';

    /**
     * Execute the command.
     *
     * @param \App\Services\EchoServiceInterface $echoService
     */
    public function handle(EchoServiceInterface $echoService)
    {
        $echoService->throwException();
    }
}
