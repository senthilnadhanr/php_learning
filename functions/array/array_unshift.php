<HTML>
<HEAD>
<TITLE>array_unshift</TITLE>
</HEAD>
<BODY>
<?php
	function printElement($element)
	{
		print("$element<BR>\n");
	}

	//set up an array of color names
	$colors = array("red", "blue", "green");
	
	//push two more color names
	array_unshift($colors, "purple", "yellow","cyan");
	echo "<prE>";print_r($colors);
	//print out all the values	
	array_walk($colors, "printElement");
?>
</BODY>
</HTML>