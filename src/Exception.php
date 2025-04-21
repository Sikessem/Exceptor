<?php

declare(strict_types=1);

namespace Sikessem\Exceptor;

use Exception as BaseException;
use Sikessem\Exceptor\Contracts\IsException;

class Exception extends BaseException implements IsException
{
    use Concerns\CanCreateException;
}
