<?php

declare(strict_types=1);

namespace Sikessem\Exceptor;

use BadMethodCallException as BaseException;
use Sikessem\Exceptor\Contracts\IsException;

class BadMethodCallException extends BaseException implements IsException
{
    use Concerns\CanCreateException;
}
