<HTML>
<HEAD>
<TITLE>getdate</TITLE>
</HEAD>
<BODY>
<?
	//get current date
	$dateInfo = getdate();

	//show all element of return array
	foreach($dateInfo as $key=>$value)
	{
		print("$key: $value<BR>\n");
	}
?>
</BODY>
</HTML>