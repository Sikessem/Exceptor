<?php

declare(strict_types=1);

namespace Sikessem\Errors\Tests;

use BadFunctionCallException;
use BadMethodCallException;
use DomainException;
use InvalidArgumentException;
use LengthException;
use LogicException;
use OutOfBoundsException;
use OutOfRangeException;
use OverflowException;
use RangeException;
use RuntimeException;
use Sikessem\Errors\BadFunctionCallException as SikessemBadFunctionCallException;
use Sikessem\Errors\BadMethodCallException as SikessemBadMethodCallException;
use Sikessem\Errors\DomainException as SikessemDomainException;
use Sikessem\Errors\InvalidArgumentException as SikessemInvalidArgumentException;
use Sikessem\Errors\LengthException as SikessemLengthException;
use Sikessem\Errors\LogicException as SikessemLogicException;
use Sikessem\Errors\OutOfBoundsException as SikessemOutOfBoundsException;
use Sikessem\Errors\OutOfRangeException as SikessemOutOfRangeException;
use Sikessem\Errors\OverflowException as SikessemOverflowException;
use Sikessem\Errors\RangeException as SikessemRangeException;
use Sikessem\Errors\RuntimeException as SikessemRuntimeException;
use Sikessem\Errors\UnderflowException as SikessemUnderflowException;
use Sikessem\Errors\UnexpectedValueException as SikessemUnexpectedValueException;
use UnderflowException;
use UnexpectedValueException;

test('All Sikessem exceptions inherit PHP exceptions', function (string $phpException, string $sikessemException) {
    $exception = $sikessemException::with('Test %s Error.', [$phpException]);
    expect($exception)->toBeInstanceOf($phpException);
    expect(fn () => throw $exception)->toThrow($phpException);
})->with([
    [BadFunctionCallException::class, SikessemBadFunctionCallException::class],
    [BadMethodCallException::class, SikessemBadMethodCallException::class],
    [DomainException::class, SikessemDomainException::class],
    [InvalidArgumentException::class, SikessemInvalidArgumentException::class],
    [LengthException::class, SikessemLengthException::class],
    [LogicException::class, SikessemLogicException::class],
    [OutOfBoundsException::class, SikessemOutOfBoundsException::class],
    [OutOfRangeException::class, SikessemOutOfRangeException::class],
    [OverflowException::class, SikessemOverflowException::class],
    [RangeException::class, SikessemRangeException::class],
    [RuntimeException::class, SikessemRuntimeException::class],
    [UnderflowException::class, SikessemUnderflowException::class],
    [UnexpectedValueException::class, SikessemUnexpectedValueException::class],
]);
