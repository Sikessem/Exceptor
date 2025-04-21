<?php

declare(strict_types=1);

namespace Sikessem\Exceptor;

use UnexpectedValueException as BaseException;

/**
 * @api
 */
class UnexpectedValueException extends BaseException implements ExceptionInterface
{
    use ExceptionTrait;
}
