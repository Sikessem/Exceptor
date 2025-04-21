<?php

declare(strict_types=1);

namespace Sikessem\Exceptor;

use LogicException as BaseException;
use Sikessem\Exceptor\Contracts\IsException;

class LogicException extends BaseException implements IsException
{
    use Concerns\CanCreateException;
}
