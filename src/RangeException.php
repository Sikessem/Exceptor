<?php

declare(strict_types=1);

namespace Sikessem\Exceptor;

use RangeException as BaseException;
use Sikessem\Exceptor\Contracts\IsException;

class RangeException extends BaseException implements IsException
{
    use Concerns\CanCreateException;
}
