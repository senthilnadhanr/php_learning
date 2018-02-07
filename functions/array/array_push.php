<HTML>
<HEAD>
    <TITLE>array_push</TITLE>
</HEAD>
<BODY>
<?php
//set up an array of color names
$colors = array("red", "blue", "green");

//push two more color names
array_push($colors, "purple", "yellow", "orange");

//print out all the values
//(red, blue, green, purple, yellow)
print("<PRE>");
print_r($colors);
print("</PRE>\n");
?>
</BODY>
</HTML>