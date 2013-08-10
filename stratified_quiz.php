<?php
$page = "Stratified sampling quiz";
include("inc/css.php");
?>
<link href="css/quiz.css" rel="stylesheet" type="text/css" />

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>

<button id='quiz_start'>Click to start</button>
<script>
$("#quiz_start").on("click", function() {
    $("#quiz").show();
    $("#quiz_start").hide();
    var secondsLeft = 120;
$("#timer span").text(secondsLeft);
var t=setInterval(incrementTimeMaybeKillPage, 1000);

function incrementTimeMaybeKillPage() {
console.log("hooray");
    secondsLeft = secondsLeft - 1;
    if(secondsLeft === 0) {
        window.location='stratified_process.php';
       // $('<input>').attr('type','hidden').attr('name', 'timeout').attr('value', 'true').appendTo('form');
        //$('form#form').submit();
        //console.log("submit");
    }
    $("#timer span").text(secondsLeft);
}
function questionComplete(){
    t.clearTimeout();
}
});
</script>
<div id='quiz'>
<section>
<form id="form" action="stratified_process.php" method="post">
<h3 id="timer">You have <span></span> seconds left</h3>
<h3>1. What is the best definition for stratified sampling?</h3>
<input type="radio" name="q1" class="radio_button" value="a1" /><span>A technique used to record data from questionnaires.</span></span><br />
<input type="radio" name="q1" class="radio_button" value="a2" /><span>Each element of the population has a equal chance of being selected.</span><br />
<input type="radio" name="q1" class="radio_button" value="a3" /><span>The population is divided into groups and then participants are taken in proportion to group sizes.</span><br />
<p>(1 mark)</p>
<br /><br />
</section>

<section>
<h3>2. What is the correct formula for stratified sampling?</h3>
<input type="radio" name="q2" class="radio_button" value="a1" /><span>Sample size for each group = size of whole sample/size of wanted sample ×  population of group</span><br />
<input type="radio" name="q2" class="radio_button" value="a2" /><span>Sample size for each group = size of wanted sample/size of whole sample ×  population of group</span><br />
<input type="radio" name="q2" class="radio_button" value="a3" /><span>Sample size for each group = population of group/size of wanted sample ×  size of whole sample</span><br />
<p>(1 mark)</p>
<br /><br />
</section>
<section>
<h2>There are 1000 pupils in a school. 50 pupils participate in a survey. You must work out how many people to ask in year 7, 8, 9, 10 and 11 from the table below.</h2>
<br /><br />
<table border="1">
<tr>
<th>Year</th>
<th>Number of pupils</th>
</tr>
<tr>
<td>7</td>
<td>240</td>
</tr>
<tr>
<td>8</td>
<td>210</td>
</tr>
<tr>
<td>9</td>
<td>160</td>
</tr>
<tr>
<td>10</td>
<td>300</td>
</tr>
<tr>
<td>11</td>
<td>90</td>
</tr>
</table>
<br /><br /><br />
<h3>3. How many people were asked in year 7?</h3>
<input type="radio" name="dummy" class="radio_button" value="dummy" /><span>10</span><br />
<input type="radio" name="q3" class="radio_button" value="a1" /><span>14</span><br />
<input type="radio" name="q3" class="radio_button" value="a2" /><span>12</span><br />
<input type="radio" name="dummy" class="radio_button" value="dummy" /><span>7</span><br />
<input type="radio" name="q3" class="radio_button" value="a3" /><span>9</span><br />
<p>(1 mark)</p>
<br /><br />


<h3>4. How many people were asked in year 8?</h3>
<input type="radio" name="q4" class="radio_button" value="a1" /><span>10</span><br />
<input type="radio" name="q4" class="radio_button" value="a2" /><span>14</span><br />
<input type="radio" name="q4" class="radio_button" value="a3" /><span>7</span><br />
<input type="radio" name="dummy" class="radio_button" value="dummy" /><span>11</span><br />
<input type="radio" name="dummy" class="radio_button" value="dummy" /><span>15</span><br />
<p>(1 mark)</p>
<br /><br />


<h3>5. How many people were asked in year 9?</h3>
<input type="radio" name="q5" class="radio_button" value="a1" /><span>7</span><br />
<input type="radio" name="q5" class="radio_button" value="a2" /><span>10</span><br />
<input type="radio" name="q5" class="radio_button" value="a3" /><span>8</span><br />
<input type="radio" name="dummy" class="radio_button" value="dummy" /><span>6</span><br />
<input type="radio" name="dummy" class="radio_button" value="dummy" /><span>14.5</span><br />
<p>(1 mark)</p>
<br /><br />


<h3>6. How many people were asked in year 10?</h3>
<input type="radio" name="q6" class="radio_button" value="a1" /><span>15</span><br />
<input type="radio" name="dummy" class="radio_button" value="dummy" /><span>12</span><br />
<input type="radio" name="q6" class="radio_button" value="a2" /><span>13.5</span><br />
<input type="radio" name="dummy" class="radio_button" value="dummy" /><span>11</span><br />
<input type="radio" name="q6" class="radio_button" value="a3" /><span>18</span><br />
<p>(1 mark)</p>
<br /><br />

<h3>7. How many people were asked in year 11?</h3>
<input type="radio" name="q7" class="radio_button" value="a1" /><span>5</span><br />
<input type="radio" name="dummy" class="radio_button" value="dummy" /><span>7</span><br />
<input type="radio" name="q7" class="radio_button" value="a2" /><span>4</span><br />
<input type="radio" name="dummy" class="radio_button" value="dummy" /><span>6</span><br />
<input type="radio" name="q7" class="radio_button" value="a3" /><span>4.5</span><br />
<p>(1 mark)</p>
<br /><br />
</section>

<h2>There are 74 workers in a game development agency. 37 workers participate in a survey.</h2>
<br />
<table border="1">
<tr>
<th class="top">Year</th>
<th class="top">Number of pupils</th>
</tr>
<tr>
<td>programmers</td>
<td>30</td>
</tr>
<tr>
<td>designers</td>
<td>24</td>
</tr>
<tr>
<td>writers</td>
<td>10</td>
</tr>
<tr>
<td>producers</td>
<td>10</td>
</tr>
</table>

<br /><br />

<h3>How many producers were asked?</h3>
<input type="radio" name="q8" class="radio_button" value="a1" /><span>5</span><br />
<input type="radio" name="dummy" class="radio_button" value="dummy" /><span>2</span><br />
<input type="radio" name="q8" class="radio_button" value="a2" /><span>3</span><br />
<input type="radio" name="dummy" class="radio_button" value="dummy" /><span>6</span><br />
<input type="radio" name="q8" class="radio_button" value="a3" /><span>8</span><br />
<p>(1 mark)</p>
<h3>How many programmers were asked?</h3>
<input type="radio" name="q9" class="radio_button" value="a1" /><span>15</span><br />
<input type="radio" name="dummy" class="radio_button" value="dummy" /><span>13</span><br />
<input type="radio" name="q9" class="radio_button" value="a2" /><span>17</span><br />
<input type="radio" name="dummy" class="radio_button" value="dummy" /><span>19</span><br />
<input type="radio" name="q9" class="radio_button" value="a3" /><span>21</span><br />
<p>(1 mark)</p>
<br /><br />

<h3>How many designers were asked?</h3>
<input type="radio" name="q10" class="radio_button" value="a1" /><span>9</span><br />
<input type="radio" name="q10" class="radio_button" value="a2" /><span>12</span><br />
<input type="radio" name="dummy" class="radio_button" value="dummy" /><span>10</span><br />
<input type="radio" name="q10" class="radio_button" value="a3" /><span>11</span><br />
<input type="radio" name="dummy" class="radio_button" value="dummy" /><span>7</span><br />
<p>(1 mark)</p>
<br /><br />

<input type="submit" value="Finished" name="submit" id ="submit" />

<script>
    $('document').ready(function{
        $('#submit').on('submit', function(){
            var quiz_name = "stratified sampling"
            var time = date.getTime()
            var thing = ('You completed' + quiz_name + 'at' + time)
            alert(thing)
        })
    })
</script>

</form>

</div>