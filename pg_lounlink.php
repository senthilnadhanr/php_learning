<HTML>
<HEAD>
<TITLE>pg_lounlink</TITLE>
</HEAD>
<BODY>
<?
	$Object = pg_locreate($Connection);
	$File = pg_loopen($Connection, $Object, "r"); 
	pg_lounlink($File, $Object);
?>
</BODY>
</HTML>