<?php

declare(strict_types=1);

use NunoMaduro\SkeletonPhp\Contracts\ExampleContract;
use NunoMaduro\SkeletonPhp\Example;

test('contract', function (): void {
    assertInstanceOf(ExampleContract::class, new Example());
});

test('foo', function (): void {
    assertEquals((new Example())->foo(), 'bar');
});
