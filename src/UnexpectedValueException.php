<?php

declare(strict_types=1);

namespace Sikessem\Exceptor;

use Sikessem\Exceptor\Contracts\IsException;
use UnexpectedValueException as BaseException;

class UnexpectedValueException extends BaseException implements IsException
{
    use Concerns\CanCreateException;
}
