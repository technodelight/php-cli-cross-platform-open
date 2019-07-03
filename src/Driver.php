<?php

namespace Technodelight\CliOpen;

interface Driver
{
    /**
     * @param string $uri
     * @throws Exception
     * @return void
     */
    public function open($uri);
}
