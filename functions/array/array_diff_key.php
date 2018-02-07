<HTML>
<HEAD>
    <TITLE>array_diff_key</TITLE>
</HEAD>
<BODY>
<?php
echo "Syntax:";
echo "array_diff_key(array1,array2,array3...);";
echo "<br>";
$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"red","c"=>"blue","d"=>"pink");

$result=array_diff_key($a1,$a2);
print_r($result);
?>

</BODY>
</HTML>