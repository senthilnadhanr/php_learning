<?php
echo "<b>Conditional Statements</b>";
echo "<br>";
echo "*******************************************************<br>";
/*$age =30;

if($age>50){
//true
	echo "Old";
}else{
	//false
	echo "young";
}

$income =500000;

if(($income/12)>30000){
	echo "good Salary";
}else{
	echo "Average Salary";
}
*/
echo "<b>If Else</b>";
echo "<br>";
$marks =30;

if($marks >90){	
	echo "good mark";
}else if($marks>70){
	echo "average mark";
}else if($marks >35){
	echo "Pass mark";
}else{
	echo "Failed";
}


echo "<br>";
echo "-------------------------------------------------------------<br>";
echo "<b>Ternary</b>";
echo "<br>";

$marks =30;
//?:;
$result = $marks>90?"good mark":($marks>70?"average mark":($marks >35?"Pass mark":"Failed"));
echo $result;

echo "<br>";
echo "-------------------------------------------------------------<br>";
echo "<b>Switch Case</b>";
echo "<br>";

switch ($marks)
{
case $marks>90:
echo "good mark";
break;

case $marks>70:
echo "average mark";
break;

case $marks >35:
echo "Pass mark";
break;

default:
echo "Fail";

}


