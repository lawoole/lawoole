<?php
namespace App\Console;

use App\Services\EchoServiceInterface;
use Illuminate\Console\Command;

class EchoServerCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'server:echo {text : The text to be printed.}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Echo a message to the server\'s console';

    /**
     * Execute the command.
     *
     * @param \App\Services\EchoServiceInterface $echoService
     */
    public function handle(EchoServiceInterface $echoService)
    {
        $echoService->echo($this->argument('text'));
    }
}