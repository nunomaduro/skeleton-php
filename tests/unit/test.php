<?php

declare(strict_types=1);

use NunoMaduro\SkeletonPhp\Example;
use NunoMaduro\SkeletonPhp\Contracts\ExampleContract;

test('contract', function (): void {
    assertInstanceOf(ExampleContract::class, new Example());
});

test('foo', function (): void {
    assertEquals((new Example())->foo(), 'bar');
});
