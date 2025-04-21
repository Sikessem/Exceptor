<?php

declare(strict_types=1);

namespace Sikessem\Exceptor;

use BadMethodCallException as BaseException;

/**
 * @api
 */
class BadMethodCallException extends BaseException implements ExceptionInterface
{
    use ExceptionTrait;
}
