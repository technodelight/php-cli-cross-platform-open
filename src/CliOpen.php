<?php

namespace Technodelight\CliOpen;

class CliOpen
{
    /**
     * @var Driver
     */
    private $driver;

    public function __construct(Driver $driver)
    {
        $this->driver = $driver;
    }

    public function open($uri)
    {
        $this->driver->open($uri);
    }
}
