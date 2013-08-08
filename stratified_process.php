<?php
$page = "Stratified sampling quiz";
include ("inc/css.php");
include ("inc/script.php");
include ("inc/header2.php");
include ("login/db.php");


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

echo "<section id = 'box1'><h1 id = 'title_h1'>You scored ".$score." / 10</h1>";

switch ($score) {
    case 0:
        echo "<p>Terrible, just terrible.</p><img src='img/u.png' alt='u grade' /></section>";
        break;
    case 1:
        echo "<p>You got some serious revising to do.</p><img src='img/f.png' alt='f grade' /></section>";
        break;
    case 2:
        echo "<p>What the hell was that?</p><img src='img/e.png' alt='e grade' /></section>";
        break;
    case 3:
        echo "<p>You got some revising to do.</p><img src='img/d.png' alt='d grade' /></section>";
        break;
    case 4:
        echo "<p>Well done on the pass but you can do better.</p><img src='img/c.png' alt='c grade' /></section>";
        break;
    case 5:
        echo "<p>Well done on the pass but you can do better.</p><img src='img/c.png' alt='c grade' /></section>";
        break;
    case 6:
        echo "<p>Good job; a little more revision and you're with the pros.</p><img src='img/b.png' alt='b grade' /></section>";
        break;
    case 7:
        echo "<p>Nice work you have done well.</p><img src='img/a.png' alt='a grade' /></section>";
        break;
    case 8:
        echo "<p>Great score.</p><img src='a_star.png' alt='img/a* grade' /></section>";
        break;
    case 9:
        echo "<p>Great score.</p><img src='a_star.png' alt='img/a* grade' /></section>";
        break;
    case 10:
        echo "<p>You are a god.</p><img src='a_star.png' alt='img/a* grade' /></section>";
        badge("100%");
        break;
}   
}

$thing = $score;

echo "</section>";
include ("login/quiz.php");
?>

<script>
    $('document').ready(function(){
        var score = "<?php echo $thing; ?>";
        console.log(score);
        var score_script = "You have scored " + score + "/10 on the stratified sampling quiz."
        console.log(score_script)
        var quiz_name = "stratified-sampling"
         
         $.ajax({
        url: "login/quiz.php",
        type: 'POST',
        data: {score:score, quiz_name:quiz_name},
        success: function(response){
            console.log(response);
        }
    });
    });

</script>

