<?php

declare(strict_types=1);

namespace Sikessem\Exceptor;

use Exception as BaseException;

/**
 * @api
 */
class Exception extends BaseException implements ExceptionInterface
{
    use ExceptionTrait;
}
