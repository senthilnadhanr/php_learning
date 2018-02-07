<!DOCTYPE html>
<html>
<head>
    <title>array_intersect_key</title>
</head>
<body>
<?php
echo "Syntax:";
echo "array_intersect_key(array1,array2,array3...)";
echo "<br>";

$a1 = array("a" => "red", "b" => "green", "c" => "blue");
$a2 = array("a" => "red", "c" => "blue", "d" => "pink");

$result = array_intersect_key($a1, $a2);
print_r($result);
?>

</body>
</html>