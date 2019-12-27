<?php

declare(strict_types=1);

namespace NunoMaduro\SkeletonPhp;

use NunoMaduro\SkeletonPhp\Contracts\ExampleContract;

/**
 * @internal
 */
final class Example implements ExampleContract
{
    public function foo(): string
    {
        return 'bar';
    }
}
