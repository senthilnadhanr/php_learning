<!DOCTYPE html>
<html>
<head>
    <title>array_merge_recursive</title>
</head>
<body>
<?php
echo "Syntax:";
echo "array_merge_recursive(array1,array2,array3...)";
echo "<br>";

$a1=array("a"=>"red","b"=>"green");
$a2=array("c"=>"blue","b"=>"yellow");
$a3=array("c"=>"orange","b"=>"yellow");
print_r(array_merge_recursive($a1,$a2,$a3));
?>

</body>
</html>