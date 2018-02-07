<HTML>
<HEAD>
<TITLE>func_get_arg</TITLE>
</HEAD>
<BODY>
<?
	/*
	** Function concat
	** Input: any number of strings
	** Output: string
	** Description: input strings are put together in
	** order and returned as a single string.
	*/
	function concat()
	{
		//start with empty string
		$returnValue = "";
		
		//loop over each argument
		for($i=0; $i < func_num_args(); $i++)
		{
			//add current argument to return value
			$returnValue .= func_get_arg($i);
		}
		
		return($returnValue);
	}

	//prints "OneTwoThree"
	print(concat("One", "Two", "Three") . "<BR>\n");
?>
</BODY>
</HTML>