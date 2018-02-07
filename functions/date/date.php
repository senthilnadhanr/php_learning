<HTML>
<HEAD>
    <TITLE>date</TITLE>
</HEAD>
<BODY>
<?php
date_default_timezone_set("Asia/Kolkata");
//prints something like
//03:59 PM Monday January 1st, 2001
print(date("h:i A l F dS, Y"));
echo "<br>";
print(date("Y-m-d H:i:s"));
echo "<br>";
print(date("d/m/Y"));
echo "<br>";
print(date("m/d/Y"));
echo "<br>";
print(date("d/m/Y", 1511435137));
echo "<br>";

$date_obj = date_create_from_format("d/m/Y", '1/1/2017');

print_r($date_obj->getTimezone());
echo "<br>";
print_r(new DateTime());
//echo time();
//DateTime::


?>
</BODY>
</HTML>