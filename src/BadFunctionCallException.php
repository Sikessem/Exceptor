<?php

declare(strict_types=1);

namespace Sikessem\Exceptor;

use BadFunctionCallException as BaseException;
use Sikessem\Exceptor\Contracts\IsException;

class BadFunctionCallException extends BaseException implements IsException
{
    use Concerns\CanCreateException;
}
