<!DOCTYPE html>
<html>
<head>
    <title>array_diff_ukey</title>
</head>
<body>
<?php
echo "Syntax:";
echo "array_diff_ukey(array1,array2,array3...,myfunction);";
echo "<br>";
function myfunction($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    return ($a > $b) ? 1 : -1;
}

$a1 = array("a" => "red", "b" => "green", "c" => "blue");
$a2 = array("a" => "blue", "b" => "black", "e" => "blue");

$result = array_diff_ukey($a1, $a2, "myfunction");
print_r($result);
?>

</body>
</html>