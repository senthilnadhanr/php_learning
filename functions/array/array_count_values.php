<HTML>
<HEAD>
<TITLE>array_count_values</TITLE>
</HEAD>
<BODY>
<?php
	//generate $sample_size random numbers 
	//between 1 and 5
	$sample_size = 100;
	srand(time());
	for($i=0; $i<$sample_size; $i++)
	{
		$data[] = rand(1,5);
	}
	
	echo "<pre>";
	//print_r($data);

	//count elements
	$count = array_count_values($data);
	
	print_r($count);

	//sort by keys
	ksort($count);
	
	

	//print out totals
	foreach($count as $key=>$value)
	{
		print("$key: $value (".(100 * $value/$sample_size)."%)<BR>\n");
	}
?>
</BODY>
</HTML>