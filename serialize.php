<HTML>
<HEAD>
<TITLE>serialize</TITLE>
</HEAD>
<BODY>
<?
	//simulate a shopping basket as
	//multi-dimensional array
	$Basket = array(
		array("soap", 1.59),
		array("bread", 0.99),
		array("milk", 1.29)
		);

	//serialize array
	$Data = serialize($Basket);
	
	//print out the data, just for fun
	print("<B>Serialized:</B><BR>\n");
	print("$Data<BR>\n");
	print("<BR>\n");
	
	//unserialize the data
	$recoveredBasket = unserialize($Data);
	
	//show the contents
	print("<B>Unserialized:</B><BR>\n");
	print("<PRE>");
	print_r($recoveredBasket);
	print("</PRE>\n");
?>
</BODY>
</HTML>