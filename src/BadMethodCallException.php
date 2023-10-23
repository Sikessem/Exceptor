<?php

declare(strict_types=1);

namespace Sikessem\Errors;

use BadMethodCallException as BaseException;
use Sikessem\Errors\Contracts\IsException;

class BadMethodCallException extends BaseException implements IsException
{
    use Concerns\CanCreateException;
}
