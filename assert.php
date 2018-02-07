<HTML>
<HEAD>
<TITLE>assert</TITLE>
</HEAD>
<BODY>
<?
	//create custom assertion function
	function failedAssertion($file, $line, $expression)
	{
		print("On line $line, in file '$file' ");
		print("the following assertion failed: '$expression'<BR>\n");
	}

	//turn on asserts
	assert_options(ASSERT_ACTIVE, TRUE);

	//bail on assertion failure
	assert_options(ASSERT_CALLBACK, "failedAssertion");
	
	//assert a false expression
	assert(1 == 2);
?>
</BODY>
</HTML>