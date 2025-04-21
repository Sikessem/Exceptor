<?php

declare(strict_types=1);

namespace Sikessem\Exceptor;

use DomainException as BaseException;

class DomainException extends BaseException implements ExceptionInterface
{
    use ExceptionTrait;
}
