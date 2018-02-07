<HTML>
<HEAD>
    <TITLE>array_change_key_case</TITLE>
</HEAD>
<BODY>
<?php
echo "Syntax:array_change_key_case(array,case)";
echo "<br>";
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
print_r(array_change_key_case($age, CASE_UPPER));
print_r(array_change_key_case($age, CASE_LOWER));
?>

</BODY>
</HTML>