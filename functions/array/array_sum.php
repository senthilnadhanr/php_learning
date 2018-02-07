<HTML>
<HEAD>
<TITLE>array_sum</TITLE>
</HEAD>
<BODY>
<?php
	$marks= [95,50,95,20];
	echo array_sum($marks);
	echo "<br>";
	$array_sum =0;
	foreach($marks as $mark){
        $array_sum+= $mark;
        //$array_sum = $array_sum+= $mark;
    }
    echo $array_sum;
?>
</BODY>
</HTML>