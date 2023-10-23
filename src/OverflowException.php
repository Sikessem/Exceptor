<?php

declare(strict_types=1);

namespace Sikessem\Errors;

use OverflowException as BaseException;
use Sikessem\Errors\Contracts\IsException;

class OverflowException extends BaseException implements IsException
{
    use Concerns\CanCreateException;
}
