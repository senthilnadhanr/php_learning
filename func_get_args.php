<HTML>
<HEAD>
<TITLE>func_get_args</TITLE>
</HEAD>
<BODY>
<?
	/*
	** Function gcd
	** Input: any number of integers
	** Output: integer
	** Description: Returns the greatest common
	** denominator from the input.
	*/
	function gcd()
	{
		/*
		** start with the smallest value and try every 
		** value until we get to 1, which is common to all
		*/
		
		$start = 2147483647;
		foreach(func_get_args() as $arg)
		{
			if(abs($arg) < $start)
			{
				$start = abs($arg);
			}
		}
		
		for($i=$start; $i > 1; $i--)
		{
			//assume we will find a gcd
			$isCommon = TRUE;

			//try each number in the supplied arguments
			foreach(func_get_args() as $arg)
			{
				//if $arg divided by $i produces a
				//remainder, then we don't have a gcd
				if(($arg % $i) != 0)
				{
					$isCommon = FALSE;
				}
			}
		
			//if we made it through the previous code
			//and $isCommon is still TRUE, then we found
			//our gcd
			if($isCommon)
			{
				break;
			}
		}

		return($i);
	}

	//prints 5
	print(gcd(10, 20, -35) . "<BR>\n");
?>
</BODY>
</HTML>