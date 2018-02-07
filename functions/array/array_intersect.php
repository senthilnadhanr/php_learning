<!DOCTYPE html>
<html>
<head>
    <title>array_intersect</title>
</head>
<body>
<?php
echo "Syntax:";
echo "array_intersect(array1,array2,array3...);";
echo "<br>";
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"black","g"=>"purple");
$a3=array("a"=>"red","b"=>"black","h"=>"yellow");

$result=array_intersect($a1,$a2,$a3);
print_r($result);
?>

</body>
</html>