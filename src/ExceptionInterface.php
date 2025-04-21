<?php

declare(strict_types=1);

namespace Sikessem\Exceptor;

use Throwable;

interface ExceptionInterface extends Throwable
{
    /**
     * @api
     *
     * @param  array<string|int>  $arguments
     */
    public static function new(string $message = '', array $arguments = [], int $code = 0, ?Throwable $previous = null): self;
}
