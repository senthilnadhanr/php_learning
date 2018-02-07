<HTML>
<HEAD>
<TITLE>apache_lookup_uri</TITLE>
</HEAD>
<BODY>
<?
	foreach((array)apache_lookup_uri("/") as $key=>$val)
	{
		print("$key: $val<BR>\n");
	}
?>
</BODY>
</HTML>