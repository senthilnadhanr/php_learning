<HTML>
<HEAD>
    <TITLE>array_walk</TITLE>
</HEAD>
<BODY>
<?php
$colors = array("red", "blue", "green");

function printElement($element)
{
    print("$element<BR>\n");
}

//array_walk($colors, "printElement");


function percentage($number)
{
    $percent = $number / 100;

    print("$percent%<BR>\n");
}

function checkEligibility($amount)
{
    if ($amount > 300000) {
        print "$amount is Eligible";
    }else{
        print "$amount is Not Eligible";
    }
    echo "<br>";
}

$yearly_income = [300000, 500000, 700000];

/*foreach ($yearly_income as $income) {
    $percent = $income / 100;
    print("$percent%<BR>\n");
}*/

//array_walk($yearly_income, "percentage");


$monthly_income = [500, 300, 700, 8000];
//array_walk($monthly_income, "percentage");;

array_walk($yearly_income, "checkEligibility");

var_dump($yearly_income);

?>
</BODY>
</HTML>