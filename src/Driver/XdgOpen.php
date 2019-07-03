<?php

namespace Technodelight\CliOpen\Driver;

use Technodelight\CliOpen\Driver;
use Technodelight\CliOpen\Exception;
use Technodelight\ShellExec\Command;
use Technodelight\ShellExec\Shell;
use Technodelight\ShellExec\ShellCommandException;

class XdgOpen implements Driver
{
    /**
     * @var Shell
     */
    private $shell;

    public function __construct(Shell $shell)
    {
        $this->shell = $shell;
    }

    /**
     * @param string $uri
     * @throws Exception
     * @return void
     */
    public function open($uri)
    {
        try {
            $this->shell->exec(Command::create('xdg-open')->withArgument($uri));
        } catch (ShellCommandException $exception) {
            Exception::fromUri($uri);
        }
    }
}
