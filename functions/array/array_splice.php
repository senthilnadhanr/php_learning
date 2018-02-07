<HTML>
<HEAD>
    <TITLE>array_splice</TITLE>
</HEAD>
<BODY>
<?php
function printElement($element)
{
    print("$element<BR>\n");
}

$al = array('1', '2', '3', '4', '5');
$a2 = array('A', 'B', 'C');
echo "Array1:<prE>";
print_r($al);
echo "Array2:<prE>";
print_r($a2);
$output = array_splice($al,2,3,$a2);
echo "Array1 after splice:<prE>";
print_r($al);
echo "Output Array after splice:<prE>";
print_r($output);

//set up an array of color names
$colors = array("red", "blue", "green",
    "yellow", "orange", "purple");
echo "Original Array:<prE>";
print_r($colors);

//remove green
$output = array_splice($colors, 2, 2);
echo "Spliced Array:<prE>";
print_r($output);
echo "Original Array After Splice:<prE>";
print_r($colors);

//insert "pink" after "blue"
array_splice($colors, 2, 0, "pink");

echo "<prE>==============";
print_r($colors);
//insert "cyan" and "black" between
//"orange" and "purple"
array_splice($colors, 2, 2, array("cyan", "black"));
echo "<prE>";
print_r($colors);

//print out all the values
array_walk($colors, "printElement");
?>
</BODY>
</HTML>