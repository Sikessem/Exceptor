<?php

declare(strict_types=1);

namespace Sikessem\Exceptor;

use RangeException as BaseException;

/**
 * @api
 */
class RangeException extends BaseException implements ExceptionInterface
{
    use ExceptionTrait;
}
