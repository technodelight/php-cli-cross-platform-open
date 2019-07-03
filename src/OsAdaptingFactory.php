<?php

namespace Technodelight\CliOpen;

use Technodelight\CliOpen\Driver\Generic;
use Technodelight\CliOpen\Driver\Opn;
use Technodelight\CliOpen\Driver\XdgOpen;
use Technodelight\ShellExec\Passthru;

class OsAdaptingFactory
{
    public static function create()
    {
        return new CliOpen(self::driver());
    }

    private static function driver()
    {
        switch(php_uname('s')) {
            case 'Darwin': return new Generic(new Passthru());
            case 'Linux': return new XdgOpen(new Passthru());
            default: return new Opn(new Passthru());
        }
    }
}
