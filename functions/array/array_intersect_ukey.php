<!DOCTYPE html>
<html>
<head>
    <title>array_intersect_ukey</title>
</head>
<body>
<?php
echo "Syntax:";
echo "array_intersect_ukey(array1,array2,array3...,myfunction)";
echo "<br>";

function myfunction($a,$b)
{
    if ($a===$b)
    {
        return 0;
    }
    return ($a>$b)?1:-1;
}

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"black","b"=>"yellow","d"=>"brown");
$a3=array("e"=>"purple","f"=>"white","a"=>"gold");

$result=array_intersect_ukey($a1,$a2,$a3,"myfunction");
print_r($result);
?>

</body>
</html>