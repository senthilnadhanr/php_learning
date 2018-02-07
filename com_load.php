<HTML>
<HEAD>
<TITLE>com_load</TITLE>
</HEAD>
<BODY>
<?
	//load object
	if(!($beeper = com_load("BeepCntMod.BeepCnt")))
	{
		print("Could not load object!<BR>\n");
		exit();
	}
	
	//print current value of count
	print(com_propget($beeper, "Count") . "<BR>\n");
	
	//change count
	com_propset($beeper, "Count", 6);
	
	//make a beep
	com_invoke($beeper, "Beep");
?>
</BODY>
</HTML>