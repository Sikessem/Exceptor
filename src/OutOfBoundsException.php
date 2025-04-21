<?php

declare(strict_types=1);

namespace Sikessem\Exceptor;

use OutOfBoundsException as BaseException;
use Sikessem\Exceptor\Contracts\IsException;

class OutOfBoundsException extends BaseException implements IsException
{
    use Concerns\CanCreateException;
}
