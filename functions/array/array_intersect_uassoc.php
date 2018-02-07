<!DOCTYPE html>
<html>
<head>
    <title>array_intersect_uassoc</title>
</head>
<body>
<?php
echo "Syntax:";
echo "array_intersect_uassoc(array1,array2,array3...,myfunction)";
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
$a2=array("a"=>"red","b"=>"green","d"=>"blue");
$a3=array("e"=>"yellow","a"=>"red","d"=>"blue");

$result=array_intersect_uassoc($a1,$a2,$a3,"myfunction");
print_r($result);
?>

</body>
</html>