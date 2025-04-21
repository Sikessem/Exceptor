<?php

declare(strict_types=1);

test('globals')
    ->expect(['dd', 'dump', 'ray'])
    ->not->toBeUsed();

test('classes')
    ->expect('Sikessem\Exceptor')
    ->toUseStrictTypes();

test('contracts')
    ->expect('Sikessem\Exceptor\Contracts')
    ->interfaces()
    ->toOnlyBeUsedIn('Sikessem\Exceptor', 'Sikessem\Exceptor\Contracts');

test('concerns')
    ->expect('Sikessem\Exceptor\Concerns')
    ->traits()
    ->toOnlyBeUsedIn('Sikessem\Exceptor', 'Sikessem\Exceptor\Concerns');
