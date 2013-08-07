<?php

$fv = 0;
$num1 = $_POST[num1];
$num2 = $_POST[num2];
$base_amount = $_POST["base_amount"];
$interest = $_POST["interest"];
$interest2 = $interest / 100;
$interest3 = $interest2 + 1;
$years = $_POST["years"];
$submit = $_POST[submit];

$num2 = $num2 / 100 * $num1;

include ('index.php');
echo "<span class='sol'>Solution:</span> <br />";
if ($num1 >= 100 and !empty($num1) and !empty($num2)) {
    $inc = $num1 / 100 * 100 - 100;
    echo "<span>$num2</span>";
    echo "<br />";
    echo "<span>You have increased your number by $inc percent</span>";
} else if ($num1 <= 99 and !empty($num1) and !empty($num2)) {
	$dec = 100 - $num1;
	echo "<span>$num2</span>";
	echo "<br />";
	echo "<span>You have decreased your number by $dec percent</span>";
    echo "<br />";
}

if (!empty($base_amount) and !empty($interest) and !empty($years)) {
    $fv = $base_amount * pow($interest3,$years);
    $fv2 = "£".$fv;
    echo "<span>$fv2</span>";
    echo "<br />";
}



?>