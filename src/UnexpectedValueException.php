<?php

declare(strict_types=1);

namespace Sikessem\Errors;

use Sikessem\Errors\Contracts\IsException;
use UnexpectedValueException as BaseException;

class UnexpectedValueException extends BaseException implements IsException
{
    use Concerns\CanCreateException;
}
