<?php

declare(strict_types=1);

namespace Sikessem\Exceptor;

use UnexpectedValueException as BaseException;

class UnexpectedValueException extends BaseException implements ExceptionInterface
{
    use ExceptionTrait;
}
