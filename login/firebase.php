<?php
include("firebase-php/firebaseLib"); 

$url = 'https://mathsacademy.firebaseio.com/';
$atoken = '?.json?auth=tJGTQ4vD8KbgcdYx23NdDkrJmh0ibmyvh8ZzlMkJ';

$fb = new fireBase($url);

$todos = array(
        'name' => 'Pick the milk',
        'priority' => 1
        );

$todoPath = '/test/test';

printf("Sending data to %s\n", $todoPath.$atoken);
    $response = $fb->set($todoPath.$atoken, $todos);
    printf("Result: %s\n", $response);

    printf("Reading data from %s\n", $todoPath.$atoken);
    $response = $fb->get($todoPath.$atoken);
    printf("Result: %s\n", $response);

?>