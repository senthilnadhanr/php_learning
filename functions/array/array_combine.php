<HTML>
<HEAD>
    <TITLE>array_combine</TITLE>
</HEAD>
<BODY>
<?php
echo "Syntax:array_count_values(array);";
echo "<br><pre>";

$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");

$c=array_combine($fname,$age);
print_r($c);
?>

</BODY>
</HTML>