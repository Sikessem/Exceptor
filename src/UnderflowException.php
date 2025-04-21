<?php

declare(strict_types=1);

namespace Sikessem\Exceptor;

use Sikessem\Exceptor\Contracts\IsException;
use UnderflowException as BaseException;

class UnderflowException extends BaseException implements IsException
{
    use Concerns\CanCreateException;
}
