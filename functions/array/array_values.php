<HTML>
<HEAD>
    <TITLE>array_values</TITLE>
</HEAD>
<BODY>
<?php
//set up an array of color names
$UserInfo = array("First Name" => "Leon",
    "Last Name" => "Atkinson",
    "Favorite Language" => "PHP");
echo "<pre>";
print_r($UserInfo);
//re-index using integers
$output = array_values($UserInfo);
echo "<pre>";
print_r($output);
print_r(array_keys($UserInfo));

//print out all the values
for ($n = 0; $n < count($output); $n++) {
    print("($n) $output[$n]<BR>\n");
}

?>
</BODY>
</HTML>