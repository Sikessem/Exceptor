<?php

declare(strict_types=1);

namespace Sikessem\Exceptor;

use LogicException as BaseException;

/**
 * @api
 */
class LogicException extends BaseException implements ExceptionInterface
{
    use ExceptionTrait;
}
