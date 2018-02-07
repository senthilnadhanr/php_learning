<HTML>
<HEAD>
<TITLE>array_pad</TITLE>
</HEAD>
<BODY>
<?php
	//create test data
	$data = array(1,2,3);
echo "<pre>";print_r($data);
	//add "start" to beginning of array
	$data = array_pad($data, -6, "start");
echo "<pre>";print_r($data);
	//add "end" to end of array
	$data = array_pad($data, 7, "end");

	echo "<pre>";print_r($data);
	
	foreach($data as $value)
	{
		print("$value<BR>\n");
	}
?>
</BODY>
</HTML>