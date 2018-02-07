<!DOCTYPE html>
<html>
<head>
    <title>array_intersect_assoc</title>
</head>
<body>
<?php
echo "Syntax:";
echo "array_intersect_assoc(array1,array2,array3...)";
echo "<br>";

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"red","b"=>"green","g"=>"blue");
$a3=array("a"=>"red","b"=>"green","g"=>"blue");

$result=array_intersect_assoc($a1,$a2,$a3);
print_r($result);
?>

</body>
</html>