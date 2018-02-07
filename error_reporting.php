<HTML>
<HEAD>
<TITLE>error_reporting</TITLE>
</HEAD>
<BODY>
<?
	//empty variable, but no notice 
	print($empty_variable);

	//turn on notices 
	error_reporting(error_reporting(0) | 8);

	//empty variable, notice message 
	print($empty_variable);
?>
</BODY>
</HTML>