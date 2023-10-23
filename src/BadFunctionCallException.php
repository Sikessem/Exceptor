<?php

declare(strict_types=1);

namespace Sikessem\Errors;

use BadFunctionCallException as BaseException;
use Sikessem\Errors\Contracts\IsException;

class BadFunctionCallException extends BaseException implements IsException
{
    use Concerns\CanCreateException;
}
