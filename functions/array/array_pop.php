<HTML>
<HEAD>
    <TITLE>array_pop</TITLE>
</HEAD>
<BODY>
<?php
//set up an array of color names
$colors = array("red", "blue", "green");

$lastColor = array_pop($colors);
//$last1Color = array_pop($colors);

//prints "green"
print($lastColor . "<BR>\n");
//prints "blue"
//print($last1Color . "<BR>\n");

//shows that colors contains red, blue
print("<PRE>");
print_r($colors);
print("</PRE>\n");
?>
</BODY>
</HTML>