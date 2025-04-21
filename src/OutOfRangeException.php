<?php

declare(strict_types=1);

namespace Sikessem\Exceptor;

use OutOfRangeException as BaseException;

class OutOfRangeException extends BaseException implements ExceptionInterface
{
    use ExceptionTrait;
}
