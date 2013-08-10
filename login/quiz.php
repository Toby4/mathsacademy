<?php
$score = $_REQUEST["score"];
$quiz = $_REQUEST["quiz_name"];
$email = $_COOKIE["email"];

if ($_REQUEST["email"]) {} else {
    $email = $_REQUEST["email"];
}

echo "db/$email/$quiz-$score";
$file = fopen("db/$email", "w+");
fwrite($file, "$quiz,$score");
?>