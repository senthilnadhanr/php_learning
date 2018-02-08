<HTML>
<HEAD>
<TITLE>strtotime</TITLE>
</HEAD>
<BODY>
<?
	//create a reason description
	//of a date
	$time = "Feb 18, 1970 3AM";

	//get its timestamp
	$ts = strtotime($time);
	
	//print it to verify that it worked
	print(date("h:i A l F dS, Y", $ts));
?>
</BODY>
</HTML>