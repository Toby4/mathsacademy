<?php
$score = $_REQUEST["score"];
$quiz = $_REQUEST["quiz_name"];
$email = $_COOKIE["email"];
echo "db/$email/$quiz-$score";
$file = fopen("db/$email", "w+");
fwrite($file, "$quiz,$score");
?>