<?php

declare(strict_types=1);

namespace Sikessem\Errors;

use Exception as BaseException;
use Sikessem\Errors\Contracts\IsException;

class Exception extends BaseException implements IsException
{
    use Concerns\CanCreateException;
}
