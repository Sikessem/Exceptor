<?php

declare(strict_types=1);

namespace Sikessem\Errors;

use RangeException as BaseException;
use Sikessem\Errors\Contracts\IsException;

class RangeException extends BaseException implements IsException
{
    use Concerns\CanCreateException;
}
