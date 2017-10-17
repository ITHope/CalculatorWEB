<?php
$num1 = $_GET['num1']+ 0;
$num1 = intval($num1);

$num2 = $_GET['num2']+ 0;
$num2 = intval($num2);

$func = $_GET["opr"]."";
$a = $num1 + $num2;

echo $func;
$result = 0.0;
if(is_numeric($_GET['num1']) && is_numeric($_GET['num2'])) {
    switch ($func) {
        case "+":
            $result = $num1 + $num2;
            break;
        case "-":
            $result = $num1 - $num2;
            break;
        case "*":
            $result = $num1 * $num2;
            break;
        case "/":
            $result = $num1 / $num2;
    }
    echo $result;
}
?>

