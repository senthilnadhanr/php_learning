<HTML>
<HEAD>
<TITLE>extension_loaded</TITLE>
</HEAD>
<BODY>
<?
	if(extension_loaded("php_mysql.dll"))
	{
		print("php_mysql.dll is present");
	}
	else
	{
		print("php_mysql.dll is not present");
	}
?>
</BODY>
</HTML>