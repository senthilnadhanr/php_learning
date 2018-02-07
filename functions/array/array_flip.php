<html>
<head>
    <title>array_flip</title>
</head>
<body>
<?php

echo "Syntax:";
echo "array_flip(array);";
echo "<br>";
//create a test array
$colors = array("red", "blue", "green");

//show array like [0] => red
print("<PRE>");
print_r($colors);
print("</PRE>\n");

//flip indices for elements
$colors = array_flip($colors);

//show array like [red] => 0
print("<PRE>");
print_r($colors);
print("</PRE>\n");
?>
</body>
</html>