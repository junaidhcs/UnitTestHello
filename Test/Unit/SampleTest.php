<?php

namespace Mytask\UnitTestHello\Test\Unit;

use Mytask\UnitTestHello\TestingClass\SampleClass;
use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    /**
     * @var SampleClass
     */
    protected $sampleClass;

    /**
     * @var string
     */
    protected $expectedMessage;

    protected function setUp(): void
    {
        // Use dependency injection instead of ObjectManager
        $this->sampleClass = new SampleClass();
        $this->expectedMessage = 'Hello, this is sample test';
    }

    public function testGetMessage()
    {
        // Typehint the return type of getMessage if possible
        $this->assertEquals($this->expectedMessage, $this->sampleClass->getMessage());
        // Change the expected message to intentionally fail the test
        // $this->assertEquals('This is not the expected message', $this->sampleClass->getMessage());
    }
}
