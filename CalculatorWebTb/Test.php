<?php


class Test extends PHPUnit_Framework_TestCase
{
    public function testAdd($a, $b, $expected)
    {
        $this->assertEquals($expected, $a + $b);
    }

    public function testMinus($a, $b, $expected)
    {
        $this->assertEquals($expected, $a - $b);
    }

    public function testMult($a, $b, $expected)
    {
        $this->assertEquals($expected, $a * $b);
    }

    public function testDiv($a, $b, $expected)
    {
        $this->assertEquals($expected, $a / $b);
    }
}
