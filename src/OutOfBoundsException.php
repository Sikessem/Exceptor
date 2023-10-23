<?php

declare(strict_types=1);

namespace Sikessem\Errors;

use OutOfBoundsException as BaseException;
use Sikessem\Errors\Contracts\IsException;

class OutOfBoundsException extends BaseException implements IsException
{
    use Concerns\CanCreateException;
}
