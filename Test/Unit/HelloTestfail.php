<?php

namespace Mytask\UnitTestHello\Test\Unit;

use PHPUnit\Framework\TestCase;
use Mytask\UnitTestHello\TestingClass\Hellofail;

class HelloTestfail extends TestCase
{
    protected $hello;

    protected function setUp(): void
    {
        $this->hello = new Hellofail();
    }

    public function testGreet()
    {
        $result = $this->hello->greet('World');
        $this->assertEquals('Hello, World!', $result); // This assertion will fail
    }
}
