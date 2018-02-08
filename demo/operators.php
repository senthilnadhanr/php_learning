<?php
//operators constants, variable
// //PHP Variables, PHP Constants, PHP Expressions, PHP Operators, PHP Control Structures, PHP Loops
// ++
// --
// .
// .=
// ===
// **


$amount=100;
//mod
// echo $amount % 5;
// echo "<br>";

//expo
$number = 2;
$power = 6;
// echo $number ** $power; // 2*2*2*2*2*2
// echo "<br>";

// echo $amount++;//increments by 1, updated value will be available in next line
// echo "<br>";
// echo $amount;
// echo "<br>";

echo ++$amount;//increments by 1, updated value will be available in the same line
echo "<br>";

echo "pre  decrement:<br>";
echo --$amount;//decrements by 1, updated value will be available in the same line
echo "<br>";

echo " post decrement:<br>";

echo $amount--;//decrements by 1, updated value will be available in the next line
echo "<br>";

echo $amount;
echo "<br>";

//.(dot)

echo ".(dot):<br>";
echo $amount.'+'.$number.'====';
echo "<br>";
$firstName = 'xxx';
$lastName ='yyy';

echo ".=:<br>";
$result = 'Full Name:';
echo $result = $result.$firstName.' '.$lastName;

echo "<br>";
//echo  $firstName.=' '.$lastName;
$result = 'Full Name';
echo $result .=$firstName.' '.$lastName;

//+=
$x=10;
$y=10;
echo "<br>";
echo $x+$y;
echo "<br>";
echo $x +=$y;

//===

echo "<br>================================<br>";
//==, =, ===
$result = 'xxx';
//echo $result;
//'xxx'=='xxx'
//echo $result == $firstName;//true=1, false =0
$amount = '200';
$amount1 = 200;
//var_dump($amount);
//var_dump($amount1);

//200<200 || 200==200 
//200<>200 
//SAME <> !=
$a= false;
$b= false;


//same && and 
//same || or 
var_dump($a xor $b);

//constant will noit changed in any line.
define('APPLICATION_NAME','Tlead App');

echo APPLICATION_NAME. '200';





