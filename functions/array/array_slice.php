<HTML>
<HEAD>
<TITLE>array_slice</TITLE>
</HEAD>
<BODY>
<?php
	function printElement($element)
	{
		print("$element<BR>\n");
	}

	//set up an array of color names
	$colors = array("red", "blue", "green", 
		"purple", "cyan", "yellow");
	echo "<prE>";print_r($colors);

	//get a new array consisting of a slice
	//from "green" to "cyan"
	$colors_slice = array_slice($colors, 2, 2);
	echo "<pre>";print_r($colors_slice);

	//print out all the values	
	array_walk($colors_slice, "printElement");
?>
</BODY>
</HTML>