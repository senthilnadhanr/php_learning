<HTML>
<HEAD>
<TITLE>getrusage</TITLE>
</HEAD>
<BODY>
<?
	//show CPU time used
	$rusage = getrusage(1);
	print($rusage["ru_utime.tv_sec"] . " seconds used.");
?>
</BODY>
</HTML>