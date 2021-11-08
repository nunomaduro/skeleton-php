<?php

use NunoMaduro\SkeletonPhp\Example;

test('foo returns bar', function () {
    //Arrange
    $example = new Example();

    //Act
    $result = $example->foo();

    //Assert
    expect($result)->toBe('bar');
});
