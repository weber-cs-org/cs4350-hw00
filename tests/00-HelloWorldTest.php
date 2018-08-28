<?php

require_once(__DIR__."/../src/00-HelloWorld.php");

class HelloWorldTest extends \PHPUnit\Framework\TestCase {
	public function testHelloWorld() {
        // arrange & act
        $actual = GetString();
        // assert
        $this->assertTrue(is_string($actual));
        $this->assertEquals(14, strlen($actual));
        $this->assertEquals("Hello, world!" . PHP_EOL, $actual);
	}
}
