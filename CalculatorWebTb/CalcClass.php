<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 23.10.2017
 * Time: 1:01
 */
class CalcClass
{

    function Calc($a, $b, $op)
    {
        switch ($op) {
            case "+":
                $res = $a + $b;
                break;
            case "-":
                $res = $a - $b;
                break;
            case "*":
                $res = $a * $b;
                break;
            case "/":
                $res = $a / $b;
        }
        return $res;
    }
}