<HTML>
<HEAD>
    <TITLE>array_diff_assoc</TITLE>
</HEAD>
<BODY>
<?php
echo "Syntax:";
echo "array_diff_assoc(array1,array2,array3...);";
echo "<br>";
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"red","f"=>"green","g"=>"blue");
$a3=array("h"=>"red","b"=>"green","g"=>"blue");

$result=array_diff_assoc($a1,$a2,$a3);
print_r($result);
?>

</BODY>
</HTML>