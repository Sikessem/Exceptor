<?php

declare(strict_types=1);

namespace Sikessem\Errors;

use LengthException as BaseException;
use Sikessem\Errors\Contracts\IsException;

class LengthException extends BaseException implements IsException
{
    use Concerns\CanCreateException;
}
