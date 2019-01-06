<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use NunoMaduro\SkeletonPhp\Example;
use NunoMaduro\SkeletonPhp\Contracts\ExampleContract;

class ExampleTest extends TestCase
{
    public function testContract(): void
    {
        $this->assertInstanceOf(ExampleContract::class, new Example());
    }

    public function testFoo(): void
    {
        $this->assertEquals((new Example())->foo(), 'bar');
    }
}
