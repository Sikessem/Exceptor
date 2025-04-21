<?php

declare(strict_types=1);

namespace Sikessem\Exceptor;

use RuntimeException as BaseException;

/**
 * @api
 */
class RuntimeException extends BaseException implements ExceptionInterface
{
    use ExceptionTrait;
}
