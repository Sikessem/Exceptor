<?php

declare(strict_types=1);

namespace Sikessem\Exceptor;

use OutOfBoundsException as BaseException;

/**
 * @api
 */
class OutOfBoundsException extends BaseException implements ExceptionInterface
{
    use ExceptionTrait;
}
