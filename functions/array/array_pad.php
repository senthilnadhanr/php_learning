<html>
<head>
    <title>array_pad</title>
</head>
<body>
<?php
echo "Syntax:";
echo "array_pad(array,size,value)";
echo "<br>";

//create test data
$data = array(1, 2, 3);
echo "<pre>";
print_r($data);
//add "start" to beginning of array
$data = array_pad($data, -6, "start");
echo "<pre>";
print_r($data);
//add "end" to end of array
$data = array_pad($data, 7, "end");

echo "<pre>";
print_r($data);

foreach ($data as $value) {
    print("$value<BR>\n");
}
?>
</body>
</html>