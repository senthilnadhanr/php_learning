<!DOCTYPE html>
<html>
<head>
    <title>array_map</title>
</head>
<body>
<?php
echo "Syntax:";
echo "array_map(myfunction,array1,array2,array3...)";
echo "<br>";

function myfunction($v)
{
    return ($v * $v);
}

$a = array(1, 2, 3, 4, 5);
print_r(array_map("myfunction", $a));


function myfunction1($v)
{
    if ($v === "Dog") {
        return "Fido";
    }
    return $v;
}

$a = array("Horse", "Dog", "Cat");
print_r(array_map("myfunction1", $a));


function myfunction2($v1, $v2)
{
    if ($v1 === $v2) {
        return "same";
    }
    return "different";
}

$a1 = array("Horse", "Dog", "Cat");
$a2 = array("Cow", "Dog", "Rat");
print_r(array_map("myfunction2", $a1, $a2));

function myfunction3($v)
{
    $v = strtoupper($v);
    return $v;
}

$a = array("Animal" => "horse", "Type" => "mammal");
print_r(array_map("myfunction3", $a));

$a1 = array("Dog", "Cat");
$a2 = array("Puppy", "Kitten");
print_r(array_map(null, $a1, $a2));
?>

</body>
</html>