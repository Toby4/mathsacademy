<?php
$raw = $_POST["email"];
$email = strtolower(trim($raw));
$md5 = md5($email);
$url = "http://www.gravatar.com/avatar/$md5";
echo $url;
?>