<HTML>
<HEAD>
<TITLE>pg_loreadall</TITLE>
</HEAD>
<BODY>
<?
	$File = pg_loopen($Connection, $Object, "r"); 
	pg_loreadall($File);
?>
</BODY>
</HTML>