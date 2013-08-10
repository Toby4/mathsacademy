<?php
include ("inc/header2.php");
?>     

<div class = "animated fadeIn">
    <section class = "section" id="box1">
        <h1 class = 'title_h1'>Stratified Sampling</h1>
       <div class="switch switch-three android">
    			<input id="definition-nav" name="view8" type="radio" checked>
				<label for="definition-nav" onclick="">Definition</label>

				<input id="explanation-nav" name="view8" type="radio">	
				<label for="explanation-nav" onclick="">Explantion</label>
					
				<input id="quiz-nav" name="view8" type="radio">	
				<label for="quiz-nav" onclick="">Quiz</label>
					
				<span class="slide-button"></span>
			</div>
        <div id="definition-content">
            <p>In statistics, stratified sampling is a method of sampling from a population.<br />
    When sub-populations vary considerably, it is advantageous to sample each subpopulation (stratum) independently. Stratification is the process of grouping members of the population into relatively homogeneous subgroups before sampling. The strata should be mutually exclusive: every element in the population must be assigned to only one stratum. The strata should also be collectively exhaustive: no population element can be excluded. Then random or systematic sampling is applied within each stratum. This often improves the representativeness of the sample by reducing sampling error. It can produce a weighted mean that has less variability than the arithmetic mean of a simple random sample of the population.</p>
            <p class="definition-source">-Wikipedia</p>
        </div>
		<div id="explanation-content">
			<p>Stratified sampling is where the population is divided into groups and then participants are taken in proportion to group sizes.
            The formula for this is Sample size for each group = size of wanted sample/size of whole sample ×  population of group.
            </p>
            <br/>
			<p>For example. A school wants to survey 50 people from year 7 and 8 about their favourite sandwich fillings. The table below shows the amount
            children in those years.</p><br/>
<table border="1">
<tr>
<th>Year</th>
<th>Number of pupils</th>
</tr>
<tr>
<td>7</td>
<td>100</td>
</tr>
<tr>
<td>8</td>
<td>200</td>
</tr>
</table>
<br/>
<p>We must first add all the people to get the size of the whole sample. We can then calculate the following: 50/300 * 100 to find out how many people we
should survey in year 7. We can now do the same for year 8 but change one of the values in the formula: 50/300 * 200. We now know that in year 7 we should
survey 16.6666666667. We now need the round this which becomes 17. We know we should survey 33.33333333 people in year 8 which we also will round (down this
time) to become 33. 17 + 33 = 50 meaning we have done everything correctly. Some times you wil come across a situation where the final result is one off.
To resolve this all you have to do is simply change a value to up or down (depending on the situation) to get it equal to the amount of people you need
to survey.
</p>
            
            
</div>
		<div id="quiz-content">
          
		  <?php  include("stratified_quiz.php") ?>
        </div>
<script>
    $("#definition-nav").on("click", function() {
        $("#definition-content").slideDown();
    	$("#explanation-content").slideUp();
		$("#quiz-content").slideUp();
	});
	$("#explanation-nav").on("click", function() {
		$("#definition-content").slideUp();
		$("#explanation-content").slideDown();
		$("#quiz-content").slideUp();
	});
	$("#quiz-nav").on("click", function() {
		$("#definition-content").slideUp();
		$("#explanation-content").slideUp();
		$("#quiz-content").slideDown();
	});
</script>
</section>
<?php
include ("inc/footer.php");
?> 
