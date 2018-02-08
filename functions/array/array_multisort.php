<html>
<head>
    <title>array_multisort</title>
</head>
<body>
<?php

echo "Syntax:";
echo "array_multisort(array1,sorting order,sorting type,array2,array3...)";
echo "<br>";

//create data
$color = array("green", "green", "blue", "white", "white");
$item = array("dish soap", "hand soap", "dish soap", "towel", "towel");
$dept = array("kitchen", "bathroom", "kitchen", "kitchen", "bathroom");
$price = array(2.50, 2.25, 2.55, 1.75, 3.00);

//sort by department, item name, color, price
array_multisort($dept, 4,
    $item, SORT_ASC,
    $color, SORT_ASC,
    $price, SORT_DESC);

echo "<prE>";
print_r($color);
echo "<prE>";
print_r($dept);
echo "<prE>";
print_r($item);
echo "<prE>";
print_r($price);

//print sorted list
for ($i = 0; $i < count($item); $i++) {
    print("$dept[$i] $item[$i] $color[$i] $price[$i]<BR>\n");
}
?>
</body>
</html>