<HTML>
<HEAD>
<TITLE>posix_getgrgid</TITLE>
</HEAD>
<BODY>
<?
	$group = posix_getgrgid(posix_getgid());
	print("Group: {$group['name']}<BR>\n");
?>
</BODY>
</HTML>