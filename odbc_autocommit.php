<HTML>
<HEAD>
<TITLE>odbc_autocommit</TITLE>
</HEAD>
<BODY>
<?
	$Connection = odbc_connect("store", "sa", "sa");

	// turn off autocommit 
	odbc_autocommit($Connection, FALSE);
?>
</BODY>
</HTML>