<HTML>
<HEAD>
    <TITLE>array_chunk</TITLE>
</HEAD>
<BODY>
<?php
echo "Syntax:array_chunk(array,size,preserve_key)";
echo "<br>";
$cars = array("Volvo", "BMW", "Toyota", "Honda", "Mercedes", "Opel");
echo "<pre>";
print_r(array_chunk($cars, 2));
?>

</BODY>
</HTML>