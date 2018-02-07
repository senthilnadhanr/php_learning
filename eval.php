<HTML>
<HEAD>
<TITLE>eval</TITLE>
</HEAD>
<BODY>
<?
	//Contrived example
	//eval() line could be replaced with $$varName = 1;
	$varName = "myValue";
	eval("\$$varName = 1;");
	print($myValue . "<BR>\n");
	
	//More realistic simulation of using eval
	//on data from a database
	$code_from_database = "<B><? print(date(\"Y-m-d\")); ?></B>";
	eval("?>" . $code_from_database);
?>
</BODY>
</HTML>