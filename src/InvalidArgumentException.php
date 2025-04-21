<?php

declare(strict_types=1);

namespace Sikessem\Exceptor;

use InvalidArgumentException as BaseException;

class InvalidArgumentException extends BaseException implements ExceptionInterface
{
    use ExceptionTrait;
}
