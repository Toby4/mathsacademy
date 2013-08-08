<?php
$page = "Percentage quiz";
include ("inc/css.php");
include ("inc/header.php");
include ("inc/script.php");
$score = 0;

echo "<link href='css/quiz.css' rel='stylesheet' type='text/css' />";

if (isset($_POST['timeout'])) {
    echo "<p>Times up boy. You better get faster.</p>"; 
} else {
if (isset($_POST["q1"])) {
    $q1 = $_POST["q1"];
    if ($q1 == "14.4" || $q1 == "14.4%") {
        $score = $score + 1;
    } else {
        $score = $score;
    }
}

if (isset($_POST['q2'])) {
    $q2 = $_POST['q2'];
    if ($q2 == "84" || $q2 == "84p" || $q2 == "84P") {
        $score = $score + 1;
    } else {
        $score = $score;
}
}
if (isset($_POST['q3'])) {
    $q3 = $_POST['q3'];
    if ($q3 == "20" || $q3 == "20%") {
        $score = $score + 1;
    } else {
        $score = $score;
    }
}

if (isset($_POST['q4'])) {
    $q4 = $_POST['q4'];
    if ($q4 == "400" || $q4 == "£400") {
        $score = $score + 1;
    } else {
        $score = $score;
    } 
}

if (isset($_POST['q5'])) {
    $q5 = $_POST['q5'];
    if ($q5 == "1500" || $q5 == "1,500" || $q5 == "£1500" || $q5 == "£1,500") {
        $score = $score + 1;
    } else {
        $score = $score;
    }
}

if (isset($_POST['q6'])) {
    $q6 = $_POST['q6'];
    if ($q6 == "35" || $q6 == "35%") {
        $score = $score + 1;
    } else {
        $score = $score;
    }
}

if (isset($_POST['q7'])) {
    $q7 = $_POST['q7'];
    if ($q7 == "5054.10" || $q7 == "£5054.10" || $q7 == "5,054.10" || $q7 == "£5,054.10" || $q7 == "£5054 p10" || $q7 == "£5,054 p10") {
        $score = $score + 3;
    } else {
        $score = $score;
    }
}
}
echo "<section id = 'box1'><h1 id = 'title_h1'>You scored ".$score." / 10</h1>";

switch ($score) {
    case 0:
        echo "<p>Teribble, just terribble.</p><img src='img/u.png' alt='u grade' />";
        break;
    case 1:
        echo "<p>You got some serious revising to do.</p><img src='img/f.png' alt='f grade' />";
        break;
    case 2:
        echo "<p>What the hell was that?</p><img src='e.png' alt='img/e grade' />";
        break;
    case 3:
        echo "<p>You got some revising to do.</p><img src='img/d.png' alt='d grade' />";
        break;
    case 4:
        echo "<p>Well done on the pass but you can do better.</p><img src='img/c.png' alt='c grade' />";
        break;
    case 5:
        echo "<p>Well done on the pass but you can do better.</p><img src='img/c.png' alt='c grade' />";
        break;
    case 6:
        echo "<p>Good job; a little more revision and you're with the pros.</p><img src='img/b.png' alt='b grade' />";
        break;
    case 7:
        echo "<p>Nice work you have done well.</p><img src='img/a.png' alt='a grade' />";
        break;
    case 8:
        echo "<p>Great score.</p><img src='img/a_star.png' alt='a* grade' />";
        break;
    case 9:
        echo "<p>Great score.</p><img src='img/a_star.png' alt='a* grade' />";
        break;
    case 10:
        echo "<p>You are a god.</p><img src='img/a_star.png' alt='a* grade' />";
        badge("100%");
        break;
}   

echo "</section>";

?>