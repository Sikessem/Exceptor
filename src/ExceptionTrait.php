<?php

declare(strict_types=1);

namespace Sikessem\Exceptor;

use Throwable;

/**
 * @api
 */
trait ExceptionTrait
{
    /**
     * @api
     *
     * @param  array<string|int|float>  $arguments
     */
    public static function new(string $message = '', array $arguments = [], int $code = 0, ?Throwable $previous = null): self
    {
        if ($arguments !== []) {
            $message = sprintf($message, ...$arguments);
        }

        $super = new self($message, $code, $previous);
        $trace = \backtrace(limit: 3);

        $file = $trace->getFile(0);
        $line = $trace->getLine(0);

        if (str_starts_with($file ?? __FILE__, dirname(__DIR__))) {
            $file = $trace->getFile(1);
            $line = $trace->getLine(1);
        }

        $super->file = $file ?? __FILE__;
        $super->line = $line ?? __LINE__;

        return $super;
    }
}
