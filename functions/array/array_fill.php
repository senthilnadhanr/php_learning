<!DOCTYPE html>
<html>
<head>
    <title>array_fill</title>
</head>
<body>
<?php
echo "Syntax:";
echo "array_fill(index,number,value);";
echo "<br>";
$a1 = array_fill(3, 4, "blue");
$b1 = array_fill(0, 1, "red");
print_r($a1);
echo "<br>";
print_r($b1);
?>

</body>
</html>