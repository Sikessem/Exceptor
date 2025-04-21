<?php

declare(strict_types=1);

namespace Sikessem\Exceptor;

use UnderflowException as BaseException;

/**
 * @api
 */
class UnderflowException extends BaseException implements ExceptionInterface
{
    use ExceptionTrait;
}
