# php-cli-cross-platform-open
Opens a file or URL in the user's preferred application in CLI (cross platform)

## usage

```
<?php

use Technodelight\CliOpen\OsAdaptingFactory;
$cliOpen = OsAdaptingFactory::create();
$cliOpen->open('https://packagist.com');
```

## requirements

You need one of the following terminal applications available:

- open (OS X default)
- xdg-open (default in some linux distros)
- opn / open-cli (https://github.com/sindresorhus/open-cli)
