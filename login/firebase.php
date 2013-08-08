<?php
include_once 'php-jwt/Authentication/JWT.php';
include_once "firebase-token-generator-php/FirebaseToken.php";

$secret = "tM5sau8O3lpxw2SQVItqahp7C0wAw0R4xGyqyyqe";
$tokenGen = new Services_FirebaseTokenGenerator($secret);
$token = $tokenGen->createToken(array("id" => "example"));

// Get data only readable by auth.id = "example".
//$uri = "https://example.firebaseio.com/.json?auth=".$token;
//var_dump(file_get_contents($uri));

echo $token;

?>