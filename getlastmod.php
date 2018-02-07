<HTML>
<HEAD>
<TITLE>getlastmod</TITLE>
</HEAD>
<BODY>
<?
	printf("This script was last modified %s", 
		date("m/d/y", getlastmod()));
?>
</BODY>
</HTML>