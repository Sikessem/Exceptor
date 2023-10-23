<?php

declare(strict_types=1);

namespace Sikessem\Errors;

use RuntimeException as BaseException;
use Sikessem\Errors\Contracts\IsException;

class RuntimeException extends BaseException implements IsException
{
    use Concerns\CanCreateException;
}
