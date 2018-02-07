<HTML>
<HEAD>
<TITLE>array_reverse</TITLE>
</HEAD>
<BODY>
<?php
	//create test data
	$data = array(3, 1, 2, 7, 5);
	
	//reverse order
	$result = array_reverse($data);
	
	//print in reverse order
	//5, 7, 2, 1, 3
	print("<PRE>");
	print_r($data);
	print_r($result);
	print("</PRE>\n");
?>
</BODY>
</HTML>