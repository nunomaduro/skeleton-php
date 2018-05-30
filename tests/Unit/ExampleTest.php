<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use NunoMaduro\SkeletonPhp\Example;
use NunoMaduro\SkeletonPhp\Contracts\ExampleContract;

class ExampleTest extends TestCase
{
    /** @test */
    public function it_respects_is_contract(): void
    {
        $this->assertInstanceOf(ExampleContract::class, new Example());
    }

    /** @test */
    public function it_performs_foo(): void
    {
        $this->assertEquals((new Example())->foo(), 'bar');
    }
}
