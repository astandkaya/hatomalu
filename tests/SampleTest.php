<?php
namespace Tests;

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    public static function setUpBeforeClass() : void
    {
    }

    public static function tearDownAfterClass() : void
    {
    }

    protected function setUp() : void
    {
    }

    protected function tearDown() : void
    {
    }

    public function testSampleSuccess()
    {
        $this->assertEquals(0, 0);
    }

    public function testSampleFailures()
    {
        $this->assertEquals(0, 1);
    }

    public function testSampleIncomplete()
    {
        $this->markTestIncomplete('未実装');
    }

}