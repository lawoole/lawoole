<?php
namespace App\Services;

interface EchoServiceInterface
{
    /**
     * Ping the server and get the server time.
     *
     * @return \DateTime
     */
    public function ping();

    /**
     * Print a message in the server console.
     *
     * @param string $message
     *
     * @return bool
     */
    public function echo($message);

    /**
     * Throw a exception.
     *
     * @return bool
     */
    public function throwException();
}
