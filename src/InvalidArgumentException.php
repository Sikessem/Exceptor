<?php

declare(strict_types=1);

namespace Sikessem\Errors;

use InvalidArgumentException as BaseException;
use Sikessem\Errors\Contracts\IsException;

class InvalidArgumentException extends BaseException implements IsException
{
    use Concerns\CanCreateException;
}
