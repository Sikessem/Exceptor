<?php

declare(strict_types=1);

namespace Sikessem\Errors;

use OutOfRangeException as BaseException;
use Sikessem\Errors\Contracts\IsException;

class OutOfRangeException extends BaseException implements IsException
{
    use Concerns\CanCreateException;
}
