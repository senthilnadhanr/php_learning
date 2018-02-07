<HTML>
<HEAD>
    <TITLE>strtok</TITLE>
</HEAD>
<BODY>
<?php
// create a demo string
$line = "leon\tatkinson\tleon@clearink.com";

// loop while there are still tokens
for ($token = strtok($line, "\t");
     $token != "";
     $token = strtok("\t")) {
    print("token: $token<BR>\n");
}

$str = 'Hello to all of Ukraine';
echo strtok($str, ' ').' '.strtok(' ').' '.strtok(' ').strtok(' ').strtok(' ').strtok(' ').strtok(' ').strtok(' ');
?>
</BODY>
</HTML>