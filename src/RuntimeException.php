<?php

declare(strict_types=1);

namespace Sikessem\Exceptor;

use RuntimeException as BaseException;
use Sikessem\Exceptor\Contracts\IsException;

class RuntimeException extends BaseException implements IsException
{
    use Concerns\CanCreateException;
}
