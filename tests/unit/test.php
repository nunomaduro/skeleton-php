<?php

use NunoMaduro\SkeletonPhp\Example;
use NunoMaduro\SkeletonPhp\Contracts\ExampleContract;

test('contract', function () {
    assertInstanceOf(ExampleContract::class, new Example());
});

test('foo', function () {
    assertEquals((new Example())->foo(), 'bar');
});
