<?php

declare(strict_types=1);

namespace Sikessem\Exceptor;

use LengthException as BaseException;
use Sikessem\Exceptor\Contracts\IsException;

class LengthException extends BaseException implements IsException
{
    use Concerns\CanCreateException;
}
