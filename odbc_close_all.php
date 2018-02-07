<HTML>
<HEAD>
<TITLE>odbc_close_all</TITLE>
</HEAD>
<BODY>
<?
	// connect to database three times 
	$Connection1 = odbc_connect("store", "guest", "guest");
	$Connection2 = odbc_connect("store", "guest", "guest");
	$Connection3 = odbc_connect("store", "guest", "guest");

	// close all the connections 
	odbc_close_all();	
?>
</BODY>
</HTML>