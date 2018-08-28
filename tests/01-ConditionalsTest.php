<?php

require_once(__DIR__."/../src/01-Conditionals.php");

class ConditionalsTest extends \PHPUnit\Framework\TestCase {
    public function testTgifFri() {
        // arrange & act
        $actual = Tgif("Fri");
        // assert
        $this->assertTrue(is_string($actual));
        $this->assertEquals(21, strlen($actual));
        $this->assertEquals("Have a nice weekend!".PHP_EOL, $actual);
    }

    public function testTgifSat() {
        // arrange & act
        $actual = Tgif("Sat");
        // assert
        $this->assertTrue(is_string($actual));
        $this->assertEquals(0, strlen($actual));
        $this->assertEquals("", $actual);
    }

   public function testTgifThu() {
        // arrange & act
        $actual = Tgif("Thu");
        // assert
        $this->assertTrue(is_string($actual));
        $this->assertEquals(0, strlen($actual));
        $this->assertEquals("", $actual);
    }

    public function testDailMessageFri() {
        // arrange & act
        $actual = DailyMessage("Fri");
        // assert
        $this->assertTrue(is_string($actual));
        $this->assertEquals(21, strlen($actual));
        $this->assertEquals("Have a nice weekend!".PHP_EOL, $actual);
    }

    public function testDailyMessageSat() {
        // arrange & act
        $actual = DailyMessage("Sat");
        // assert
        $this->assertTrue(is_string($actual));
        $this->assertEquals(17, strlen($actual));
        $this->assertEquals("Have a nice day!".PHP_EOL, $actual);
    }

   public function testDailyMessageThu() {
        // arrange & act
        $actual = DailyMessage("Thu");
        // assert
        $this->assertTrue(is_string($actual));
        $this->assertEquals(17, strlen($actual));
        $this->assertEquals("Have a nice day!".PHP_EOL, $actual);
    }

    public function testDailMessageTernaryFri() {
        // arrange & act
        $actual = DailyMessageTernary("Fri");
        // assert
        $this->assertTrue(is_string($actual));
        $this->assertEquals(21, strlen($actual));
        $this->assertEquals("Have a nice weekend!".PHP_EOL, $actual);
    }

    public function testDailyMessageTernarySat() {
        // arrange & act
        $actual = DailyMessageTernary("Sat");
        // assert
        $this->assertTrue(is_string($actual));
        $this->assertEquals(17, strlen($actual));
        $this->assertEquals("Have a nice day!".PHP_EOL, $actual);
    }

   public function testDailyMessageTernaryThu() {
        // arrange & act
        $actual = DailyMessageTernary("Thu");
        // assert
        $this->assertTrue(is_string($actual));
        $this->assertEquals(17, strlen($actual));
        $this->assertEquals("Have a nice day!".PHP_EOL, $actual);
    }

    public function testPageChoiceAbout() {
        // arrange & act
        $actual = PageChoice("About");
        // assert
        $this->assertTrue(is_string($actual));
        $this->assertEquals(18, strlen($actual));
        $this->assertEquals("You selected About", $actual);

    }

    public function testPageChoiceHome() {
        // arrange & act
        $actual = PageChoice("Home");
        // assert
        $this->assertTrue(is_string($actual));
        $this->assertEquals(17, strlen($actual));
        $this->assertEquals("You selected Home", $actual);
    }

    public function testPageChoiceLinks() {
        // arrange & act
        $actual = PageChoice("Links");
        // assert
        $this->assertTrue(is_string($actual));
        $this->assertEquals(18, strlen($actual));
        $this->assertEquals("You selected Links", $actual);
    }
    
    public function testPageChoiceSignIn() {
        // arrange & act
        $actual = PageChoice("Sign In");
        // assert
        $this->assertTrue(is_string($actual));
        $this->assertEquals(20, strlen($actual));
        $this->assertEquals("You selected Sign In", $actual);
    }
}
