<?php
namespace App\Services;

use App\Services\Contracts\Ping as PingContract;

class Ping implements PingContract
{
    /**
     * @param string $string
     *
     * @return string
     */
    public function ping($string)
    {
        return 'Pong '.$string;
    }
}
