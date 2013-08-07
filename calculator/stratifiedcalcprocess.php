<?php
echo "Hey";
$group = $_POST[group];
$submit = $_POST[submit];
$func = $_POST[func];

include ('stratifiedcalc.php');
echo"<form method='post' action='stratifiedcalcprocess2.php'>";
echo "<span class='title'>Enter fields</span>";
echo "<table>";
echo"<tr>";
echo "<td><span>Group names: </span></td><br />";
echo "<td>";
if ($submit == false) {
    echo"error";
} else if ($func == 2) {
	echo"<input type='text' name='g_1' id='group_name'>";
	echo"<input type='text' name='g_2' id='group_name'>";
} else if ($func == 3) {
	echo"<input type='text' name='g_1' id='group_name'>";
	echo"<input type='text' name='g_2' id='group_name'>";
	echo"<input type='text' name='g_3' id='group_name'>";
} else if ($func == 4) {
	echo"<input type='text' name='g_1' id='group_name'>";
	echo"<input type='text' name='g_2' id='group_name'>";
	echo"<input type='text' name='g_3' id='group_name'>";
	echo"<input type='text' name='g_4' id='group_name'>";
} else if ($func == 5) {
	echo"<input type='text' name='g_1' id='group_name'>";
	echo"<input type='text' name='g_2' id='group_name'>";
	echo"<input type='text' name='g_3' id='group_name'>";
	echo"<input type='text' name='g_4' id='group_name'>";
	echo"<input type='text' name='g_5' id='group_name'>";
} else if ($func == 6) {
	echo"<input type='text' name='g_1' id='group_name'>";
	echo"<input type='text' name='g_2' id='group_name'>";
	echo"<input type='text' name='g_3' id='group_name'>";
	echo"<input type='text' name='g_4' id='group_name'>";
	echo"<input type='text' name='g_5' id='group_name'>";
	echo"<input type='text' name='g_6' id='group_name'>";
} else if ($func == 7) {
	echo"<input type='text' name='g_1' id='group_name'>";
	echo"<input type='text' name='g_2' id='group_name'>";
	echo"<input type='text' name='g_3' id='group_name'>";
	echo"<input type='text' name='g_4' id='group_name'>";
	echo"<input type='text' name='g_5' id='group_name'>";
	echo"<input type='text' name='g_6' id='group_name'>";
	echo"<input type='text' name='g_7' id='group_name'>";
} else if ($func == 8) {
	echo"<input type='text' name='g_1' id='group_name'>";
	echo"<input type='text' name='g_2' id='group_name'>";
	echo"<input type='text' name='g_3' id='group_name'>";
	echo"<input type='text' name='g_4' id='group_name'>";
	echo"<input type='text' name='g_5' id='group_name'>";
	echo"<input type='text' name='g_6' id='group_name'>";
	echo"<input type='text' name='g_7' id='group_name'>";
	echo"<input type='text' name='g_8' id='group_name'>";
} else if ($func == 9) {
	echo"<input type='text' name='g_1' id='group_name'>";
	echo"<input type='text' name='g_2' id='group_name'>";
	echo"<input type='text' name='g_3' id='group_name'>";
	echo"<input type='text' name='g_4' id='group_name'>";
	echo"<input type='text' name='g_5' id='group_name'>";
	echo"<input type='text' name='g_6' id='group_name'>";
	echo"<input type='text' name='g_7' id='group_name'>";
	echo"<input type='text' name='g_8' id='group_name'>";
	echo"<input type='text' name='g_9' id='group_name'>";
} else if ($func == 10) {
	echo"<input type='text' name='g_1' id='group_name'>";
	echo"<input type='text' name='g_2' id='group_name'>";
	echo"<input type='text' name='g_3' id='group_name'>";
	echo"<input type='text' name='g_4' id='group_name'>";
	echo"<input type='text' name='g_5' id='group_name'>";
	echo"<input type='text' name='g_6' id='group_name'>";
	echo"<input type='text' name='g_7' id='group_name'>";
	echo"<input type='text' name='g_8' id='group_name'>";
	echo"<input type='text' name='g_9' id='group_name'>";
	echo"<input type='text' name='g_10' id='group_name'>";
}
echo "</td>";
echo"</tr>";
echo "<br /> <td><span>Amount of people: </span></td><br />";
echo "<td>";
if ($submit == false) {
	include('index.php');
} else if ($func == 1) {
	echo"<input type='text' name='a_1' id='group_name'>";
} else if ($func == 2) {
	echo"<input type='text' name='a_1' id='group_name'>";
	echo"<input type='text' name='a_2' id='group_name'>";
} else if ($func == 3) {
	echo"<input type='text' name='a_1' id='group_name'>";
	echo"<input type='text' name='a_2' id='group_name'>";
	echo"<input type='text' name='a_3' id='group_name'>";
} else if ($func == 4) {
	echo"<input type='text' name='a_1' id='group_name'>";
	echo"<input type='text' name='a_2' id='group_name'>";
	echo"<input type='text' name='a_3' id='group_name'>";
	echo"<input type='text' name='a_4' id='group_name'>";
} else if ($func == 5) {
	echo"<input type='text' name='a_1' id='group_name'>";
	echo"<input type='text' name='a_2' id='group_name'>";
	echo"<input type='text' name='a_3' id='group_name'>";
	echo"<input type='text' name='a_4' id='group_name'>";
	echo"<input type='text' name='a_5' id='group_name'>";
} else if ($func == 6) {
	echo"<input type='text' name='a_1' id='group_name'>";
	echo"<input type='text' name='a_2' id='group_name'>";
	echo"<input type='text' name='a_3' id='group_name'>";
	echo"<input type='text' name='a_4' id='group_name'>";
	echo"<input type='text' name='a_5' id='group_name'>";
	echo"<input type='text' name='a_6' id='group_name'>";
} else if ($func == 7) {
	echo"<input type='text' name='a_1' id='group_name'>";
	echo"<input type='text' name='a_2' id='group_name'>";
	echo"<input type='text' name='a_3' id='group_name'>";
	echo"<input type='text' name='a_4' id='group_name'>";
	echo"<input type='text' name='a_5' id='group_name'>";
	echo"<input type='text' name='a_6' id='group_name'>";
	echo"<input type='text' name='a_7' id='group_name'>";
} else if ($func == 8) {
	echo"<input type='text' name='a_1' id='group_name'>";
	echo"<input type='text' name='a_2' id='group_name'>";
	echo"<input type='text' name='a_3' id='group_name'>";
	echo"<input type='text' name='a_4' id='group_name'>";
	echo"<input type='text' name='a_5' id='group_name'>";
	echo"<input type='text' name='a_6' id='group_name'>";
	echo"<input type='text' name='a_7' id='group_name'>";
	echo"<input type='text' name='a_8' id='group_name'>";
} else if ($func == 9) {
	echo"<input type='text' name='a_1' id='group_name'>";
	echo"<input type='text' name='a_2' id='group_name'>";
	echo"<input type='text' name='a_3' id='group_name'>";
	echo"<input type='text' name='a_4' id='group_name'>";
	echo"<input type='text' name='a_5' id='group_name'>";
	echo"<input type='text' name='a_6' id='group_name'>";
	echo"<input type='text' name='a_7' id='group_name'>";
	echo"<input type='text' name='a_8' id='group_name'>";
	echo"<input type='text' name='a_9' id='group_name'>";
} else if ($func == 10) {
	echo"<input type='text' name='a_1' id='group_name'>";
	echo"<input type='text' name='a_2' id='group_name'>";
	echo"<input type='text' name='a_3' id='group_name'>";
	echo"<input type='text' name='a_4' id='group_name'>";
	echo"<input type='text' name='a_5' id='group_name'>";
	echo"<input type='text' name='a_6' id='group_name'>";
	echo"<input type='text' name='a_7' id='group_name'>";
	echo"<input type='text' name='a_8' id='group_name'>";
	echo"<input type='text' name='a_9' id='group_name'>";
	echo"<input type='text' name='a_10' id='group_name'>";
}
echo "</td>";
echo "<tr>";
echo "<td>";
echo "<span>Amount of people to survey: </span>";
echo "</td>";
echo "<td>";
echo "<input type='text' name='survey_p' id='group_name'>";
echo "</td>";
echo"</tr>";
echo"</tr>";
echo "</table>";
echo "<br /> <input type='submit' name='submit' value='Submit' id='button'/>";
echo"</form>";
?>