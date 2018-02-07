<HTML>
<HEAD>
<TITLE>pg_loread</TITLE>
</HEAD>
<BODY>
<?
	$Object = pg_locreate($Connection);
	$File = pg_loopen($Connection, $Object, "r"); 
	$Contents = pg_loread($File, 4096);
?>
</BODY>
</HTML>