<HTML>
<HEAD>
<TITLE>aspell_new</TITLE>
</HEAD>
<BODY>
<?
	//create a test sentence
	$text = "Thiss sentense haz some spellling erors.";

	//load dictionary
	$aspell_link = aspell_new('english');

	//tokenize sentence
	for($word = strtok($text, ' '); $word != ''; $word = strtok(' '))
	{
		//check for unrecognized words
		if(!aspell_check($aspell_link, $token))
		{
			//try checking raw version
			if(!aspell_check_raw($aspell_link, $token))
			{
				//word not recognized, get suggestions
				$suggestion = aspell_suggest($aspell_link, $token);
				
				print("<B>Unrecognized word:</B> $token<BR>\n");

				while(list($index, $word) = each($suggestion)) 
				{
   					print("$val<BR>\n");
				}

				print("<BR>\n");
			}
		
		}
	
	}
?>
</BODY>
</HTML>