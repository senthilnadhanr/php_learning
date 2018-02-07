<!DOCTYPE html>
<html>
<head>
    <title>array_key_exists</title>
</head>
<body>
<?php
echo "Syntax:";
echo "array_key_exists(key,array)";
echo "<br>";

$a=array("Volvo"=>"XC90","BMW"=>"X5");
if (array_key_exists("Volvo",$a))
{
    echo "Key exists!";
}
else
{
    echo "Key does not exist!";
}


$a=array("Volvo","BMW");
if (array_key_exists(0,$a))
{
    echo "Key exists!";
}
else
{
    echo "Key does not exist!";
}
?>

</body>
</html>