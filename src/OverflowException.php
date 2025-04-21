<?php

declare(strict_types=1);

namespace Sikessem\Exceptor;

use OverflowException as BaseException;
use Sikessem\Exceptor\Contracts\IsException;

class OverflowException extends BaseException implements IsException
{
    use Concerns\CanCreateException;
}
