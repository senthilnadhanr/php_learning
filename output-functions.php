<?php
#echo,print(),print_r(),var_dump(),var_export(),printf(), sprintf(), vsprintf(), vprintf(), fprintf(), vfprintf()
//echo — Output one or more strings, return void
echo "echo";
echo "<br>**********<br>";
echo "Output one or more strings, return void";
echo "<br>----------------------------------------------------------------------------------------------------<br>";

//print - Output a string, return int
//This is a language construct and not a function, it cannot be called using variable functions.
echo "print()";
echo "<br>**********<br>";
print("Output a string, return int");
echo "<br>";
print "print() also works without parentheses.";
echo "<br>----------------------------------------------------------------------------------------------------<br>";

//print_r — Prints human-readable information about a variable
echo "print_r()";
echo "<br>**********<br>";
print("Prints human-readable information about a variable");
echo "<br>";
$a = array ('a' => 'apple', 'b' => 'banana', 'c' => array ('x', 'y', 'z'));
print_r ($a);
echo "<br>----------------------------------------------------------------------------------------------------<br>";

//var_dump() - Dumps information about a variable
echo "var_dump()";
echo "<br>**********<br>";
print("Dumps information about a variable");
echo "<br>";
$a = array(1, 2, array("a", "b", "c"));
var_dump($a);
echo "<br>----------------------------------------------------------------------------------------------------<br>";

//var_export — Outputs or returns a parsable string representation of a variable
echo "var_export()";
echo "<br>**********<br>";
print("Outputs or returns a parsable string representation of a variable");
echo "<br>";
$a = array(1, 2, array("a", "b", "c"));
var_export($a);
echo "<br>----------------------------------------------------------------------------------------------------<br>";

//sprintf(), printf(), vsprintf(), vprintf(), fprintf(), vfprintf()
//printf() - Output a formatted string, return int
echo "printf()";
echo "<br>**********<br>";
echo "Output a formatted string, return int";
echo "<br>";
$number = 2.12;
printf("%.1f", $number);
echo "<br>----------------------------------------------------------------------------------------------------<br>";

//sprintf() - Return a formatted string, return int
echo "sprintf()";
echo "<br>**********<br>";
echo "Return a formatted string, return string, accepts variable args";
echo "<br>";
$location = 'Zoo';
$count = 2;
$format = 'The %s contains %d monkeys';
echo sprintf($format, $location, $count);
echo "<br>----------------------------------------------------------------------------------------------------<br>";

echo "vsprintf()";
echo "<br>**********<br>";
echo "Return a formatted string, return string, accepts array args";
echo "<br>";
$location = 'Zoo';
$count = 2;
$format = 'The %s contains %d monkeys';
echo vsprintf($format, [$location, $count]);
echo "<br>----------------------------------------------------------------------------------------------------<br>";

//vprintf() - Output a formatted string, return int
echo "vprintf()";
echo "<br>**********<br>";
echo "Output a formatted string, return int, accepts an array of arguments";
echo "<br>";
echo vprintf("%04d-%02d-%02d", explode('-', '1986-07-21'));
echo "<br>----------------------------------------------------------------------------------------------------<br>";


//fprintf — Write a formatted string to a stream,return int
echo "fprintf()";
echo "<br>**********<br>";
echo "Write a formatted string to a stream,return int";
echo "<br>";
if (!($fp = fopen('test.txt', 'w'))) {
    return;
}
echo fprintf($fp, "%04d-%02d-%02d", '1986', '7', '21');
echo "<br>----------------------------------------------------------------------------------------------------<br>";

//vfprintf — Write a formatted string to a stream,return int
echo "vfprintf()";
echo "<br>**********<br>";
echo "Write a formatted string to a stream,return int";
echo "<br>";
if (!($fp = fopen('test.txt', 'w'))) {
    return;
}
echo vfprintf($fp, "%04d-%02d-%02d", explode('-', '1986-07-21'));
echo "<br>----------------------------------------------------------------------------------------------------<br>";

//flush() - Flush system output buffer
echo "flush()";
echo "<br>**********<br>";
echo "Flush system output buffer";
echo "<br>----------------------------------------------------------------------------------------------------<br>";

