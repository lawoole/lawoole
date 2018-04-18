<?php
namespace App\Services\Contracts;

interface Ping
{
    /**
     * @param string $string
     *
     * @return string
     */
    public function ping($string);
}
