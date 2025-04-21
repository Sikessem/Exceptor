<?php

declare(strict_types=1);

namespace Sikessem\Exceptor;

use InvalidArgumentException as BaseException;
use Sikessem\Exceptor\Contracts\IsException;

class InvalidArgumentException extends BaseException implements IsException
{
    use Concerns\CanCreateException;
}
