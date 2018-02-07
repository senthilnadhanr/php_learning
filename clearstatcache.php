<HTML>
<HEAD>
<TITLE>clearstatcache</TITLE>
</HEAD>
<BODY>
<?
	//make sure info isn't cached
	clearstatcache();
	
	//get size of this file
	print(filesize(__FILE__));
?>
</BODY>
</HTML>