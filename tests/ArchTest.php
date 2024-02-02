<?php

arch('it does not use debug functions')
    ->expect(['dd', 'ddd', 'dump', 'var_dump', 'print_r', 'ray'])
    ->each->not->toBeUsed();

arch('it uses Strict Types')
    ->expect('NunoMaduro\SkeletonPhp')
    ->toUseStrictTypes();
