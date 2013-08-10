<?php
$score = $_REQUEST["score"];
$quiz = $_REQUEST["quiz_name"];
$email = $_COOKIE["email"];

if ($_REQUEST["email"]) {} else {
    $email = $_REQUEST["email"];
}

echo "$email/$quiz-$score";
setcookie("quiz", "$quiz - $score", time()+3600);
?>