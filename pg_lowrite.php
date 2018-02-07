<HTML>
<HEAD>
<TITLE>pg_lowrite</TITLE>
</HEAD>
<BODY>
<?
	$Object = pg_locreate($Connection);
	$File = pg_loopen($Connection, $Object, "w"); 
	pg_lowrite($File, "some text");
?>
</BODY>
</HTML>