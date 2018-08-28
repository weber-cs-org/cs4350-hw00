<?php

require_once(__DIR__."/../src/02-Looping.php");

class LoopingTest extends \PHPUnit\Framework\TestCase {
    protected $expected = "Value of i is 0
Value of i is 1
Value of i is 2
Value of i is 3
Value of i is 4
Value of i is 5
Value of i is 6
Value of i is 7
Value of i is 8
Value of i is 9
Value of i is 10" . PHP_EOL;

    public function testDoWhileLoop() {
        // arrange & act
        $actual = DoWhileLoop();
        // assert
        $this->assertTrue(is_string($actual));
        $this->assertEquals(177, strlen($actual));
        $this->assertEquals($this->expected, $actual);
    }

    public function testForLoop() {
        // arrange & act
        $actual = ForLoop();
        // assert
        $this->assertTrue(is_string($actual));
        $this->assertEquals(177, strlen($actual));
        $this->assertEquals($this->expected, $actual);
    }
}
