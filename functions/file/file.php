<HTML>
<HEAD>
    <TITLE>file</TITLE>
</HEAD>
<BODY>
<?php
// open file
$myFile = file("data.txt");

//fold array elements into one string
$myFile = implode(",", $myFile);

//print	entire file
print($myFile);
?>
</BODY>
</HTML>