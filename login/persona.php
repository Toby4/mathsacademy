<?php
session_start(); 
include("db.php");
$url = 'https://verifier.login.persona.org/verify';

$assert = filter_input(
    INPUT_POST,
    'assertion',
    FILTER_UNSAFE_RAW,
    FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH
);


$params = 'assertion=' . $assert . '&audience=' . urlencode($_SERVER['SERVER_NAME']);
$ch = curl_init();

$options = array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => TRUE,
    CURLOPT_POST => 2,
    CURLOPT_POSTFIELDS => $params
);

curl_setopt_array($ch, $options);
$result = curl_exec($ch);
curl_close($ch);

$jsondecode =  json_decode($result, true);
$email = $jsondecode["email"];
dbAddUser($email);
$_SESSION["email"] = $email;
echo $email;


?>