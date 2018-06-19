<?php
namespace App\Services;

use Carbon\Carbon;
use Lawoole\Console\OutputStyle;
use LogicException;

class EchoService implements EchoServiceInterface
{
    /**
     * The styled output instance.
     *
     * @var \Lawoole\Console\OutputStyle
     */
    protected $output;

    /**
     * Create a echo service instance.
     *
     * @param \Lawoole\Console\OutputStyle $output
     */
    public function __construct(OutputStyle $output)
    {
        $this->output = $output;
    }

    /**
     * Ping the server and get the server time.
     *
     * @return \DateTime
     */
    public function ping()
    {
        return Carbon::now();
    }

    /**
     * Print a message in the server console.
     *
     * @param string $message
     *
     * @return bool
     */
    public function echo($message)
    {
        $this->output->info("Client echo a message: {$message}");

        return true;
    }

    /**
     * Throw a exception.
     *
     * @return bool
     */
    public function throwException()
    {
        throw new LogicException('Testing exception throwing.');
    }
}