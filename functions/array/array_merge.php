<HTML>
<HEAD>
    <TITLE>array_merge</TITLE>
</HEAD>
<BODY>
<?php
function printElement($element)
{
    print("Color: $element<BR>\n");
}

//set up an array of color names
$colors = array("red", "blue", "green");
$more_colors = array("yellow", "purple", "orange");

echo "<pre>";
print_r($colors);
print_r($more_colors);
//merge arrays
$all_colors = array_merge($colors, $more_colors);
print_r($all_colors);

//print out all the values
array_walk($all_colors, "printElement");
$numbers = [100, 90, 50];
array_walk($numbers, "printNumber");

function printNumber($number)
{
    print (($number / 100) . "%\n");
}

?>
</BODY>
</HTML>