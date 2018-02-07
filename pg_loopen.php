<HTML>
<HEAD>
<TITLE>pg_loopen</TITLE>
</HEAD>
<BODY>
<?
	$Object = pg_locreate($Connection);
	$File = pg_loopen($Connection, $Object, "r"); 
	pg_loclose($File);
?>
</BODY>
</HTML>