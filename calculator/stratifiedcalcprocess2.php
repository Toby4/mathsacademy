<?php
$submit = $_POST[submit];
$g_1 = $_POST[g_1];
$g_2 = $_POST[g_2];
$g_3 = $_POST[g_3];
$g_4 = $_POST[g_4];
$g_5 = $_POST[g_5];
$g_6 = $_POST[g_6];
$g_7 = $_POST[g_7];
$g_8 = $_POST[g_8];
$g_9 = $_POST[g_9];
$g_10 = $_POST[g_10];


$a_1 = $_POST[a_1];
$a_2 = $_POST[a_2];
$a_3 = $_POST[a_3];
$a_4 = $_POST[a_4];
$a_5 = $_POST[a_5];
$a_6 = $_POST[a_6];
$a_7 = $_POST[a_7];
$a_8 = $_POST[a_8];
$a_9 = $_POST[a_9];
$a_10 = $_POST[a_10];

$survey_p = $_POST[survey_p];

include('stratifiedcalc.php');
$a_total = $a_1 + $a_2 + $a_3 + $a_4 + $a_5 + $a_6 + $a_7 + $a_8 + $a_9 + $a_10;
@$a1 = $a_1 / $a_total * $survey_p;
@$a2 = $a_2 / $a_total * $survey_p;
@$a3 = $a_3 / $a_total * $survey_p;
@$a4 = $a_4 / $a_total * $survey_p;
@$a5 = $a_5 / $a_total * $survey_p;
@$a6 = $a_6 / $a_total * $survey_p;
@$a7 = $a_7 / $a_total * $survey_p;
@$a8 = $a_8 / $a_total * $survey_p;
@$a9 = $a_9 / $a_total * $survey_p;
@$a10 = $a_10 / $a_total * $survey_p;
echo "<table>";
echo "<tr>";
echo "<td><span>Groups: </span></td>";
echo "<td>$g_1</td>";
echo "<td>$g_2</td>";
echo "<td>$g_3</td>";
echo "<td>$g_4</td>";
echo "<td>$g_5</td>";
echo "<td>$g_6</td>";
echo "<td>$g_7</td>";
echo "<td>$g_8</td>";
echo "<td>$g_9</td>";
echo "<td>$g_10</td>";
echo"</tr>";
echo "<tr>";
echo "<td><span>People to ask: </span></td>";
echo "<td>$a1</td>";
echo "<td>$a2</td>";
if (!$a3 == 0) {
echo "<td>$a3</td>";
} else {
    echo"";
}
if (!$a4 == 0) {
echo "<td>$a4</td>";
} else {
    echo"";
}
if (!$a5 == 0) {
echo "<td>$a5</td>";
} else {
	echo"";
}
if (!$a6 == 0) {
echo "<td>$a6</td>";
} else {
	echo"";
}
if (!$a7 == 0) {
echo "<td>$a7</td>";
} else {
	echo"";
}
if (!$a8 == 0) {
echo "<td>$a8</td>";
} else {
	echo"";
}
if (!$a9 == 0) {
echo "<td>$a9</td>";
} else {
	echo"";
}
if (!$a10 == 0) {
echo "<td>$a10</td>";
} else {
	echo"";
}
echo"</tr>";
echo "</table>";
?>