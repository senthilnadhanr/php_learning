<!DOCTYPE html>
<html>
<head>
    <title>array_filter</title>
</head>
<body>
<?php
echo "Syntax:";
echo "array_filter(array,callbackfunction);";
echo "<br>";

function test_odd($var)
{
    return ($var & 1);
}

$a1 = array("a", "b", 2, 3, 4);
print_r(array_filter($a1, "test_odd"));
?>
</body>
</html>