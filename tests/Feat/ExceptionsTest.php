<?php

declare(strict_types=1);

namespace Sikessem\Exceptor\Tests;

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
use Sikessem\Exceptor\BadFunctionCallException as SikessemBadFunctionCallException;
use Sikessem\Exceptor\BadMethodCallException as SikessemBadMethodCallException;
use Sikessem\Exceptor\DomainException as SikessemDomainException;
use Sikessem\Exceptor\InvalidArgumentException as SikessemInvalidArgumentException;
use Sikessem\Exceptor\LengthException as SikessemLengthException;
use Sikessem\Exceptor\LogicException as SikessemLogicException;
use Sikessem\Exceptor\OutOfBoundsException as SikessemOutOfBoundsException;
use Sikessem\Exceptor\OutOfRangeException as SikessemOutOfRangeException;
use Sikessem\Exceptor\OverflowException as SikessemOverflowException;
use Sikessem\Exceptor\RangeException as SikessemRangeException;
use Sikessem\Exceptor\RuntimeException as SikessemRuntimeException;
use Sikessem\Exceptor\UnderflowException as SikessemUnderflowException;
use Sikessem\Exceptor\UnexpectedValueException as SikessemUnexpectedValueException;
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
