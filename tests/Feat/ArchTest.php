<?php

declare(strict_types=1);

test('globals')
    ->expect(['dd', 'dump', 'ray'])
    ->not->toBeUsed();

test('classes')
    ->expect('Sikessem\Errors')
    ->toUseStrictTypes();

test('contracts')
    ->expect('Sikessem\Errors\Contracts')
    ->interfaces()
    ->toOnlyBeUsedIn('Sikessem\Errors', 'Sikessem\Errors\Contracts');

test('concerns')
    ->expect('Sikessem\Errors\Concerns')
    ->traits()
    ->toOnlyBeUsedIn('Sikessem\Errors', 'Sikessem\Errors\Concerns');
