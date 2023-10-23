<?php

declare(strict_types=1);

namespace Sikessem\Errors;

use DomainException as BaseException;
use Sikessem\Errors\Contracts\IsException;

class DomainException extends BaseException implements IsException
{
    use Concerns\CanCreateException;
}
