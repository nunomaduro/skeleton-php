<?php

use SwowCloud\SkeletonPhp\Example;

it('foo', function () {
    $example = new Example();

    $result = $example->foo();

    expect($result)->toBe('bar');
});
