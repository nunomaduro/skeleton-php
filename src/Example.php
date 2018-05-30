<?php

declare(strict_types=1);

/**
 * This file is part of NunoMaduro SkeletonPhp.
 *
 * (c) Nuno Maduro <enunomaduro@gmail.com>
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 */

namespace NunoMaduro\SkeletonPhp;

use NunoMaduro\SkeletonPhp\Contracts\ExampleContract;

/**
 * This is an Example implementation.
 */
final class Example implements ExampleContract
{
    /**
     * Performs foo and returns bar.
     *
     * @return string With the bar.
     */
    public function foo(): string
    {
        return 'bar';
    }
}
