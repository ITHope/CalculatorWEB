<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>

<?php

$a = 0;
$b = 0;
$op = 0;
$res = 0;


switch($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        $the_request = &$_GET;
        break;
    case 'POST':
        $the_request = &$_POST;
        break;
}

if (isset($the_request['a']) && $the_request['b'] && $the_request['op']) {
    $a = $the_request['a'] + 0;
    $b = $the_request['b'] + 0;
    $op = $the_request['op'];
    $op = rawurldecode($op);
    $res = $the_request['res'];

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
}

?>

<h2>Calculator usint GET method</h2>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
    Number 1 <input type="text" id="a" name="a"><br />
    Number 2 <input type="text" id="b" name="b"><br />
    Operator <input type="text" id="op" name="op"><br />
    Result <input type="text" id="res"  name="res" value = "<?php echo $res; ?>"><br />
    <input type="submit" value=" Result " id = "btnRes"><br />
</form>

<h2>Calculator usint POST method</h2>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Number 1 <input type="text" id="a" name="a"><br />
    Number 2 <input type="text" id="b" name="b"><br />
    Operator <input type="text" id="op" name="op"><br />
    Result <input type="text" id="res"  name="res" value = "<?php echo $res; ?>"><br />
    <input type="submit" value=" Result " id = "btnRes"><br />
</form>


</body>
</html>
