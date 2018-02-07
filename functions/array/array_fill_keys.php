<!DOCTYPE html>
<html>
<head>
    <title>array_fill_keys</title>
</head>
<body>
<?php
echo "Syntax:";
echo "array_fill_keys(keys,value);";
echo "<br>";
$keys=array("a","b","c","d");
$a1=array_fill_keys($keys,"blue");
print_r($a1);
?>

</body>
</html>