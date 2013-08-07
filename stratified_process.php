<?php
$page = "Basic operators quiz";
include ("inc/css.php");
include ("inc/script.php");
include ("inc/header.php");

echo "<link href='css/quiz.css' rel='stylesheet' type='text/css' />";

$score = 0;
if (isset($_POST['timeout'])) {
    echo "<p>Times up boy. You better get faster.</p>"; 
} else {
if (isset($_POST['q1'])) {
    $q1 = $_POST['q1'];
    if ($q1 == "a1") {
        $score = $score;
    } else if ($q1 == "a2") {
        $score = $score;
    } else if ($q1 == "a3") {
        $score = $score + 1;
    }
}

if (isset($_POST['q2'])) {
    $q2 = $_POST['q2'];
    if ($q2 == "a1") {
        $score = $score;
    } else if ($q2 == "a2") {
        $score = $score + 1;
    } else if ($q2 == "a3") {
        $score = $score;
    };
}

if (isset($_POST['q3'])) {
    $q3 = $_POST['q3'];
    if ($q3 == "a1") {
        $score = $score;
    } else if ($q3 == "a2") {
        $score = $score + 1;
    } else if ($q3 == "a3") {
        $score = $score;
    }
}

if (isset($_POST['q4'])) {
    $q4 = $_POST['q4'];
    if ($q4 == "a1") {
        $score = $score + 1;
    } else if ($q4 == "a2") {
        $score = $score;
    } else if ($q4 == "a3") {
        $score = $score;
    }
}

if (isset($_POST['q5'])) {
    $q5 = $_POST['q5'];
    if ($q5 == "a1") {
        $score = $score;
    } else if ($q5 == "a2") {
        $score = $score;
    } else if ($q5 == "a3") {
        $score = $score + 1;
    }
}

if (isset($_POST['q6'])) {
    $q6 = $_POST['q6'];
    if ($q6 == "a1") {
        $score = $score + 1;
    } else if ($q6 == "a2") {
        $score = $score;
    } else if ($q6 == "a3") {
        $score = $score;
    }
}

if (isset($_POST['q7'])) {
    $q7 = $_POST['q7'];
    if ($q7 == "a1") {
        $score = $score + 1;
    } else if ($q7 == "a2") {
        $score = $score;
    } else if ($q7 == "a3") {
        $score = $score;
    }
}

if (isset($_POST['q8'])) {
    $q8 = $_POST['q8'];
    if ($q8 == "a1") {
        $score = $score + 1;
    } else if ($q8 == "a2") {
        $score = $score;
    } else if ($q8 == "a3") {
        $score = $score;
    }
}

if (isset($_POST['q9'])) {
    $q9 = $_POST['q9'];
    if ($q9 == "a1") {
        $score = $score + 1;
    } else if ($q9 == "a2") {
        $score = $score;
    } else if ($q9 == "a3") {
        $score = $score;
    }
}

if (isset($_POST['q10'])) {
    $q10 = $_POST['q10'];
    if ($q10 == "a1") {
        $score = $score;
    } else if ($q10 == "a2") {
        $score = $score + 1;
    } else if ($q10 == "a3") {
        $score = $score;
    }
}

echo "<h1>You scored ".$score." / 10</h1>";

switch ($score) {
    case 0:
        echo "<p>Teribble, just terribble.</p><img src='img/u.jpg' alt='u grade' />";
        break;
    case 1:
        echo "<p>You got some serious revising to do.</p><img src='img/f.jpg' alt='f grade' />";
        break;
    case 2:
        echo "<p>What the hell was that?</p><img src='img/e.jpg' alt='e grade' />";
        break;
    case 3:
        echo "<p>You got some revising to do.</p><img src='img/d.jpg' alt='d grade' />";
        break;
    case 4:
        echo "<p>Well done on the pass but you can do better.</p><img src='img/c.jpg' alt='c grade' />";
        break;
    case 5:
        echo "<p>Well done on the pass but you can do better.</p><img src='img/c.jpg' alt='c grade' />";
        break;
    case 6:
        echo "<p>Good job; a little more revision and you're with the pros.</p><img src='img/b.jpg' alt='b grade' />";
        break;
    case 7:
        echo "<p>Nice work you have done well.</p><img src='img/a.jpg' alt='a grade' />";
        break;
    case 8:
        echo "<p>Great score.</p><img src='a_star.jpg' alt='img/a* grade' />";
        break;
    case 9:
        echo "<p>Great score.</p><img src='a_star.jpg' alt='img/a* grade' />";
        break;
    case 10:
        echo "<p>You are a god.</p><img src='a_star.jpg' alt='img/a* grade' />";
        badge("100%");
        break;
}   
}

?>