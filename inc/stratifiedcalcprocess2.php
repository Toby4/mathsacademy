<?php
$submit = $_POST[submit];
$g_1 = $_POST[g_1];
$g_2 = $_POST[g_2];
$g_3 = $_POST[g_3];
$g_4 = $_POST[g_4];



$a_1 = $_POST[a_1];
$a_2 = $_POST[a_2];
$a_3 = $_POST[a_3];
$a_4 = $_POST[a_4];

$survey_p = $_POST[survey_p];


$a_total = $a_1 + $a_2 + $a_3 + $a_4;
@$a1 = $a_1 / $a_total * $survey_p;
@$a2 = $a_2 / $a_total * $survey_p;
@$a3 = $a_3 / $a_total * $survey_p;
@$a4 = $a_4 / $a_total * $survey_p;
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
echo "<td>$a3</td>";
echo "<td>$a4</td>";

echo"</tr>";
echo "</table>";
?>