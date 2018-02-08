<?php
//for
//while, do while
//foreach

//$marks= ['karthi'=>95,'senthil'=>50,'Afyq'=>95,'raj'=>20];
echo "<b>Loops</b>";
echo "<br>";
echo "*******************************************************<br>";
$marks= [95,50,95,20];
echo "<b>For</b>";
echo "<br>";
for($index=0; $index<count($marks);$index++){
	echo "Student".($index+1).':';
	echo $marks[$index]>90?"good mark":($marks[$index]>70?"average mark":($marks[$index] >35?"Pass mark":"Failed"));
	echo "<br>";
}

// 0; 0<4; 0(1) 95
// 1<4;1(2)    50
// 2<4;2(3)   95
// 3<4; 3(4)  20

// 4<4 fails
echo "-------------------------------------------------------------<br>";
echo "<b>While</b>";
echo "<br>";
$index = 0;
//$marks=[];
while($index<count($marks)){
	echo "Student".($index+1).':';
	echo $marks[$index]>90?"good mark":($marks[$index]>70?"average mark":($marks[$index] >35?"Pass mark":"Failed"));
	echo "<br>";
	$index++;	
}
// 0<4 execute block 1
// 1<4 execute block 2
// 2<4  execute block 3
// 3<4  execute block 4
// 4<4 false
$index = 0;
echo "-------------------------------------------------------------<br>";
echo "<b>Do While</b>";
echo "<br>";
do{
	if($index==0){
		echo "Student Results:".count($marks);
		echo "<br>";
	}
	if(count($marks)>0){
		echo "Student".($index+1).':';
		echo $marks[$index]>90?"good mark":($marks[$index]>70?"average mark":($marks[$index] >35?"Pass mark":"Failed"));
	$index++;
	}
	
	echo "<br>";
}
while($index<count($marks));
// 0
// display 1<4
// display 2<4
// display 3<4
// display 4<4;
echo "-------------------------------------------------------------<br>";
echo "<b>Foreach</b>";
echo "<br>";
//foraeach
$marks= ['karthi'=>95,'senthil'=>50,'Afyq'=>95,'raj'=>20];
//$marks= [95,50,95,20];

$marks = new stdClass();
$marks->karthi = 95;
$marks->senthil = 50;
$marks->Afyq = 95;
$marks->raj = 20;

//var_dump($marks);
//echo "<prE>";
//print_r($marks);

foreach($marks as $name=>$value){
	echo $name.':';
	echo $value;
	echo "<br>";
}

