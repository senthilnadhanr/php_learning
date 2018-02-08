<?php
//Functions

echo "<b>Functions</b>";
echo "<br>";
echo "*******************************************************<br>";
$marks['karthik'] = ['tamil'=>90,'english'=>95,'maths'=>99];
$marks['Afyq'] = ['tamil'=>95,'english'=>92,'maths'=>91];
echo "<pre>";
//print_r($marks);
//$average = getAverage($marks,'chennai','GHS');//function call

$student = new Student();
$average = $student->getAverage($marks,'chennai','kkkkkkkkk');
print_r($average);

//function definition
/*function getAverage($marks,$location,$school='SSM'){
	echo $school;
	echo $location;
	$average = [];
	foreach($marks as $name=>$mark){		
		$average[$name] = number_format(array_sum($mark)/count($mark),2);
	}
	return $average;
}*/

class Student{
	
	public $marks;
	public $average;
	
	public function getAverage($marks,$location,$school='SSM'){
	//echo $school;
	//echo $location;
	$average = [];
	foreach($marks as $name=>$mark){		
		$average[$name] = number_format(array_sum($mark)/count($mark),2);
	}
	return $average;
}
}