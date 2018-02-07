<HTML>
<HEAD>
<TITLE>preg_match_all</TITLE>
</HEAD>
<BODY>
<?
	//create test data
	$paragraph = "This is a <B>short</B> paragraph.  Some ";
	$paragraph .= "<B>words</B> and <B>some phrases</B> ";
	$paragraph .= "are surround by <B>bold</B> tags. ";

	/*
	** use PREG_MATCH_ORDER to find bold words
	*/
	preg_match_all("|<[^>]+>(.*)</[^>]+>|", $paragraph,
		$match, PREG_MATCH_ORDER);

	//print full matches
	print("<B>Full matches</B>:<BR>\n");
	for($i=0; $i < count($match[0]); $i++)
	{
		print(htmlentities($match[0][$i]) . "<BR>\n");
	}

	print("<B>Subpattern matches</B>:<BR>\n");
	for($i=0; $i < count($match[1]); $i++)
	{
		print(htmlentities($match[0][$i]) . "<BR>\n");
	}
	
	/*
	** use PREG_SET_ORDER to find bold words
	*/
	preg_match_all("|<[^>]+>(.*)</[^>]+>|", $paragraph,
		$match, PREG_SET_ORDER);

	print("<B>Matches using PREG_SET_ORDER</B>:<BR>\n");
	foreach($match as $m)
	{
		print(htmlentities($m[0]));

		for($i=1; $i < count($m); $i++)
		{
			print(" (".htmlentities($m[$i]).")");
		}
		
		print("<BR>\n");
	}
?>
</BODY>
</HTML>