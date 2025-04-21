<?php

declare(strict_types=1);

namespace Sikessem\Exceptor;

use BadFunctionCallException as BaseException;

/**
 * @api
 */
class BadFunctionCallException extends BaseException implements ExceptionInterface
{
    use ExceptionTrait;
}
