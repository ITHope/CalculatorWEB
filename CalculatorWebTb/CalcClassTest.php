<?php
use PHPUnit\Framework\TestCase;

class CalcClassTest extends TestCase
{

    public function testAdd($a, $b, $exp) {
        $calc = new CalcClass();
        $this->assertEquals($exp, @$calc->calc($a,$b,'+'));
    }

    public function additionProvider()
    {
        return [
            'adding zeros'  => [0, 0, 0],
            'zero plus one' => [0, 1, 1],
            'one plus zero' => [1, 0, 1],
            'one plus one'  => [1, 1, 2]
        ];
    }



    public function testMinus($a, $b, $exp) {
        $calc = new CalcClass();
        $this->assertEquals($exp, @$calc->calc($a,$b,'-'));
    }

    public function minusProvider()
    {
        return [
            'minus zeros'  => [0, 0, 0],
            'one minus zero' => [1, 0, 1],
            'one minus one'  => [1, 1, 0]
        ];
    }


    public function testDiv($a, $b, $exp) {
        $calc = new CalcClass();
        $this->assertEquals($exp, @$calc->calc($a,$b,'/'));
    }

    public function dividingProvider()
    {
        return [
            'one div one'  => [1, 1, 1],
            'two div one' => [2, 1, 2],
            'six div two'  => [6, 2, 3]
        ];
    }

    public function testMult($a, $b, $exp) {
        $calc = new CalcClass();
        $this->assertEquals($exp, @$calc->calc($a,$b,'*'));
    }

    public function multiplyingProvider()
    {
        return [
            'one mult one'  => [1, 1, 1],
            'two mult one' => [2, 1, 2],
            'six mult two'  => [6, 2, 12]
        ];
    }
}
