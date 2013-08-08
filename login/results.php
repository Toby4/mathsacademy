<?php
$email = $_REQUEST["email"];
$file = "db/$email";
$lines = file($file);

foreach($lines as $line_num => $line) {
    $html = str_replace(",", ", ") . " points<br />";
    echo $html;
}
?>