<?php
$page = "Percentage quiz";
include("inc/css.php");

echo "<link href='css/quiz.css' rel='stylesheet' type='text/css' />";
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>
<script>
var secondsLeft = 141;
$("#timer span").text(secondsLeft);
var t=setInterval(incrementTimeMaybeKillPage, 1000);

function incrementTimeMaybeKillPage() {
console.log("hooray");
    secondsLeft = secondsLeft - 1;
    if(secondsLeft === 0) {
        window.location='process.php';
       // $('<input>').attr('type','hidden').attr('name', 'timeout').attr('value', 'true').appendTo('form');
        //$('form#form').submit();
        //console.log("submit");
    }
    $("#timer span").text(secondsLeft);
}
function questionComplete(){
    t.clearTimeout();
}
</script>
<form id="form" action="percentage_process.php" method="post">
<h3>1. A company receives 1250 orders in December. It has a January sale. It receives 1430 orders in January. Work out the percentage increase in orders.</h3> 
<input type="text" name="q1" class="text" placeholder="Answer" /><br />
<p>(1 marks)</p>
<br /><br />

<h3>2. A loaf of bread costs 75p.
The cost of the bread goes up by 12%.
Work out the new cost of the loaf of bread.</h3>
<input type="text" name="q2" class="text" placeholder="Answer" /><br />
<p>(1 marks)</p>

<br /><br />

<h3>3. Paul buys a pack of 20 notebooks for £7.50.
He sells then for 45p each.
He sells all the notebooks.
Work out the percentage profit.</h3>
<input type="text" name="q3" class="text" placeholder="Answer" /><br />
<p>(1 marks)</p>
<br /><br />

<h3>4. Ian earns £420 a week after a 5% rise. What was his pay before?</h3>
<input type="text" name="q4" class="text" placeholder="Answer" /><br />
<p>(1 marks)</p>
<br /><br />

<h3>5. A PC is sold for £1200 at a reduction of 20% on its recommended retail price. What was the computer's original price?</h3>
<input type="text" name="q5" class="text" placeholder="Answer" /><br />
<p>(1 marks)</p>
<br /><br />

<h3>6. There are 14 boys and 26 girls in a class room. What percentage are there of boys?</h3>
<input type="text" name="q6" class="text" placeholder="Answer" /><br />
<p>(1 marks)</p>

<br /><br />

<h3>7. Joe puts £1600 into a bank account with 7% compound interest. How much does joe have in his account 17 years later(2 d.p)?</h3>
<input type="text" name="q7" class="text" placeholder="Answer" /><br />
<p>(3 marks)</p>

<br /><br />

<input type="submit" value="Finished" name="submit" />

</form>


<h3 id="timer">You have <span></span> seconds left</h3>