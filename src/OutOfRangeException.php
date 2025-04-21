<?php

declare(strict_types=1);

namespace Sikessem\Exceptor;

use OutOfRangeException as BaseException;
use Sikessem\Exceptor\Contracts\IsException;

class OutOfRangeException extends BaseException implements IsException
{
    use Concerns\CanCreateException;
}
