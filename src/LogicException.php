<?php

declare(strict_types=1);

namespace Sikessem\Errors;

use LogicException as BaseException;
use Sikessem\Errors\Contracts\IsException;

class LogicException extends BaseException implements IsException
{
    use Concerns\CanCreateException;
}
