<?php

declare(strict_types=1);

namespace Sikessem\Exceptor;

use LengthException as BaseException;

class LengthException extends BaseException implements ExceptionInterface
{
    use ExceptionTrait;
}
