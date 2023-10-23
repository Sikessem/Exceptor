<?php

declare(strict_types=1);

namespace Sikessem\Errors\Contracts;

use Throwable;

interface IsException extends Throwable
{
    /**
     * @param  array<string|int>  $arguments
     * @param  ?Throwable  $previous
     */
    public static function with(string $message = '', array $arguments = [], int $code = 0, Throwable $previous = null): self;
}
