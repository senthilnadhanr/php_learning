<HTML>
<HEAD>
<TITLE>array_keys</TITLE>
</HEAD>
<BODY>
<?php

	/*$colors = array("red"=>'#FF0000', "blue"=>"#0000FFF", "green"=>"#00FF00");
	echo "<pre>";print_r($colors);
	echo "<pre>";print_r(array_keys($colors));exit;*/
	
	
	//create random test data with 0 or 1
	srand(time());
	for($i=0; $i<10; $i++)
	{
		$data[] = rand(0,5);
	}
	
	echo "<pre>";print_r($data);
	echo "<pre>";print_r(array_keys($data,5));exit;
	
	//print out the keys to 1's
	foreach(array_keys($data, 1) as $key)
	{
		print("$key<BR>\n");
	}
?>
</BODY>
</HTML>